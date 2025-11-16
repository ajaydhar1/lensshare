/* typing + presence */

(() => {
  // ---- nodes ----
  const toolbar = document.getElementById('viewer-inner-toolbar');
  let status = document.getElementById('room-status');
  if (!status && toolbar) {
    status = document.createElement('span');
    status.id = 'room-status';
    status.className = 'muted';
    toolbar.appendChild(status);
  }
  if (!status) return; // bail if no toolbar

  // ---- state ----
  const TYPING_TTL     = 3000; // ms after last ‘typing’ to clear that user
  const JOINLEAVE_TTL  = 2500; // ms to show join/leave message
  const TYPING_THROTTLE= 1200; // ms min interval to emit "typing"
  const nameMe = (window.LogFeedWS?.getName?.() || localStorage.getItem('lensshare:name') || 'Guest').trim();
  const room   = window.LogFeedWS?.getRoom?.() || (new URLSearchParams(location.search).get('room') || 'lobby');

  const typingUsers = new Map(); // name -> expiry timestamp
  let lastTypingEmit = 0;
  let joinLeaveQueue = []; // [{txt, until}]
  let uiTimer = null;

  // ---- helpers ----
  function now(){ return Date.now(); }
  function pruneTyping() {
    const t = now();
    for (const [n, exp] of typingUsers) if (t > exp) typingUsers.delete(n);
  }
  function formatTyping() {
    const nameLatest = (window.LogFeedWS?.getName?.() || localStorage.getItem('lensshare:name') || 'Guest').trim();
    pruneTyping();
    const names = [...typingUsers.keys()].filter(n => n !== nameLatest);
    if (names.length === 0) return '';
    if (names.length === 1) return `<span class="name">${escapeHtml(names[0])}</span> is typing…`;
    if (names.length === 2) return `<span class="name">${escapeHtml(names[0])}</span> and <span class="name">${escapeHtml(names[1])}</span> are typing…`;
    return `<span class="name">${escapeHtml(names[0])}</span> and ${names.length-1} others are typing…`;
  }
  function escapeHtml(s){ return String(s).replace(/[&<>"']/g, m=>({ '&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;' }[m])); }

  function pushJoinLeave(txt) {
    // coalesce: if same text is already showing, extend its life slightly
    const until = now() + JOINLEAVE_TTL;
    const last = joinLeaveQueue[joinLeaveQueue.length-1];
    if (last && last.txt === txt) { last.until = until; }
    else joinLeaveQueue.push({ txt, until });
  }
  function pruneJoinLeave() {
    const t = now();
    joinLeaveQueue = joinLeaveQueue.filter(it => t < it.until);
  }

  function renderStatus() {
    // priority: typing > join/leave > empty
    const typingText = formatTyping();
    if (typingText) {
      status.innerHTML = `<span class="pulse">${typingText}</span>`;
      return;
    }
    pruneJoinLeave();
    if (joinLeaveQueue.length) {
      status.innerHTML = escapeHtml(joinLeaveQueue[joinLeaveQueue.length-1].txt);
      return;
    }
    status.textContent = ''; // idle
  }

  function scheduleUI() {
    if (uiTimer) return;
    uiTimer = setInterval(() => {
      const before = status.innerHTML;
      pruneTyping();
      pruneJoinLeave();
      renderStatus();
      if (!formatTyping() && joinLeaveQueue.length === 0) {
        clearInterval(uiTimer); uiTimer = null;
      }
    }, 250);
  }

  // ---- socket glue ----
  function wsSend(obj){
    const ws = window.LogFeedWS?.getSocket?.();
    if (!ws || ws.readyState !== 1) return;
    obj.room = room;
    obj.ts = now();
    try { ws.send(JSON.stringify(obj)); } catch {}
  }

  // on incoming frames
  (function attachWS(){
    const ws = window.LogFeedWS?.getSocket?.();
    const nameLatest = (window.LogFeedWS?.getName?.() || localStorage.getItem('lensshare:name') || 'Guest').trim();
    if (!(ws instanceof WebSocket)) { setTimeout(attachWS, 400); return; }
    if (ws._statusAttached) return;
    ws._statusAttached = true;
    ws.addEventListener('message', (e)=>{
      let msg; try { msg = JSON.parse(e.data); } catch { return; }
      if (!msg || msg.room !== room) return;
      const who = (msg.user?.name || 'Guest').trim();

      if (msg.type === 'presence') {
        const s = msg.data?.status;
        if (s === 'join')  { if (who !== nameLatest) { pushJoinLeave(`${who} entered the room`); scheduleUI(); } }
        if (s === 'leave') { if (who !== nameLatest) { pushJoinLeave(`${who} left the room`);    scheduleUI(); } }
      }
      else if (msg.type === 'typing') {
        if (who !== nameLatest) {
          typingUsers.set(who, now() + TYPING_TTL);
          renderStatus();
          scheduleUI();
        }
      }
      else if (msg.type === 'stopTyping') {
        if (who !== nameLatest) {
          typingUsers.delete(who);
          renderStatus();
        }
      }
    });
  })();

  // ---- emit: join/leave (you already emit join on open; add leave here) ----
  window.addEventListener('beforeunload', () => {
    const nameLatest = (window.LogFeedWS?.getName?.() || localStorage.getItem('lensshare:name') || 'Guest').trim();
    wsSend({ type:'presence', user:{name:nameLatest}, data:{status:'leave'} });
  });

  // ---- emit: typing (throttled) from composer textarea ----
  const composer = document.querySelector('form.stack textarea[name="body"]')
                || document.querySelector('[data-input="message"]');
  let typingIdleTimer = null;

  function emitTyping() {
    const t = now();
    const nameLatest = (window.LogFeedWS?.getName?.() || localStorage.getItem('lensshare:name') || 'Guest').trim();
    if (t - lastTypingEmit >= TYPING_THROTTLE) {
      lastTypingEmit = t;
      wsSend({ type:'typing', user:{name:nameLatest} });
    }
    // auto send stopTyping after idle
    if (typingIdleTimer) clearTimeout(typingIdleTimer);
    typingIdleTimer = setTimeout(()=> wsSend({ type:'stopTyping', user:{name:nameLatest} }), TYPING_TTL);
  }

  if (composer) {
    composer.addEventListener('input', emitTyping);
    composer.addEventListener('keydown', (e)=> {
      // don't spam on every key if held; input handler is enough, but this helps on some IMEs
      if (e.key.length === 1 || e.key === 'Backspace' || e.key === 'Enter') emitTyping();
    });
    // when form submits, stop typing immediately
    composer.form?.addEventListener('submit', () => {
      const nameLatest = (window.LogFeedWS?.getName?.() || localStorage.getItem('lensshare:name') || 'Guest').trim();
      if (typingIdleTimer) clearTimeout(typingIdleTimer);
      wsSend({ type:'stopTyping', user:{name:nameLatest} });
    });
  }

  // initial render (blank)
  renderStatus();
})();


/* entered/left the room */

(() => {
  const toolbar = document.getElementById('viewer-inner-toolbar');
  let status = document.getElementById('room-status');
  if (!status && toolbar) {
    status = document.createElement('span');
    status.id = 'room-status';
    status.className = 'muted';
    toolbar.appendChild(status);
  }
  if (!status) return;

  const ROOM = window.LogFeedWS?.getRoom?.() || new URLSearchParams(location.search).get('room') || 'lobby';
  const ME   = (window.LogFeedWS?.getName?.() || 'Guest').trim() || 'Guest';

  const SHOW_MS = 2500;     // how long to show each notice
  let queue = [];           // {txt, until}
  let uiTimer = null;

  function now(){ return Date.now(); }
  function escapeHtml(s){ return String(s).replace(/[&<>"']/g, m=>({ '&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;' }[m])); }

  // typing text, if your typing module set a formatter; else fallback empty
  function currentTypingText(){
    return window.__typingStatusText ? window.__typingStatusText() : '';
  }

  function pushNotice(text){
    const t = now();
    const last = queue[queue.length-1];
    if (last && last.txt === text) last.until = t + SHOW_MS; // extend same message
    else queue.push({ txt: text, until: t + SHOW_MS });
    kickRender();
  }

  function render(){
    // priority: typing > join/leave
    const typing = currentTypingText();
    if (typing) { status.innerHTML = typing; return; }

    const t = now();
    queue = queue.filter(it => t < it.until);
    if (queue.length) status.innerHTML = escapeHtml(queue[queue.length-1].txt);
    else if (!typing) status.textContent = '';
    if (!typing && queue.length === 0) { clearInterval(uiTimer); uiTimer = null; }
  }
  function kickRender(){
    if (!uiTimer) uiTimer = setInterval(render, 200);
    render();
  }

  function attach(){
    const ws = window.LogFeedWS?.getSocket?.();
    if (!(ws instanceof WebSocket)) { setTimeout(attach, 400); return; }
    if (ws._joinLeaveAttached) return;
    ws._joinLeaveAttached = true;

    ws.addEventListener('message', (e)=>{
      let msg; try { msg = JSON.parse(e.data); } catch { return; }
      if (!msg || msg.room !== ROOM || msg.type !== 'presence') return;
      const who = (msg.user?.name || 'Guest').trim();
      if (who === ME) return; // don't announce myself
      const status = msg.data?.status;
      if (status === 'join')  pushNotice(`${who} entered the room`);
      if (status === 'leave') pushNotice(`${who} left the room`);
    });
  }
  attach();

  // be nice: send an explicit 'leave' on nav away (server is broadcast-only)
  window.addEventListener('pagehide', () => {
    const ws = window.LogFeedWS?.getSocket?.();
    if (ws && ws.readyState === 1) {
      ws.send(JSON.stringify({ type:'presence', room:ROOM, ts:Date.now(), user:{name:ME}, data:{status:'leave'} }));
    }
  });

  // OPTIONAL: expose a hook so your typing module can set its text (for priority)
  window.__setTypingFormatter = (fn /* () => string */) => { window.__typingStatusText = fn; };
})();