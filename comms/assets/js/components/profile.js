/* name flow (before WS) + chip + Jitsi integration */


(() => {
  const LS_KEY = 'lensshare:name';

  // DOM
  const chip      = document.getElementById('chip-you');
  const chipName  = document.getElementById('chip-you-name');
  const chipEdit  = document.getElementById('chip-you-edit');
  const modal     = document.getElementById('name-modal');
  const input     = document.getElementById('name-input');
  const btnSave   = document.getElementById('name-save');
  const btnCancel = document.getElementById('name-cancel');

  const composerName = document.querySelector('form.stack input[name="user"]');

  // helpers
  const getName = () => (localStorage.getItem(LS_KEY) || '').trim();
  const setName = (n) => localStorage.setItem(LS_KEY, n);

  function applyName(n) {
    const LS_KEY = 'lensshare:name';
    const prev = (localStorage.getItem(LS_KEY) || '').trim();
    const name = (n || 'Guest').trim() || 'Guest';
    if (prev === name) {
      // still update UI/Jitsi in case caller wants to resync
    }

    // persist + UI
    localStorage.setItem(LS_KEY, name);
    if (chipName)     chipName.textContent = name;
    if (composerName) composerName.value   = name;

    // Jitsi live (if running)
    try { if (window.jitsiApi) window.jitsiApi.executeCommand('displayName', name); } catch {}

    // ensure any future Jitsi embed uses this name
    window.PENDING_DISPLAY_NAME = name;

    // ---- WS integration (if present) ----
    try {
      // 1) update the WS glue's internal name (preferred)
      if (window.LogFeedWS?.setName) {
        window.LogFeedWS.setName(name);
      } else if (window.LogFeedWS && typeof window.LogFeedWS.getName === 'function') {
        // fallback: if your glue exposes state indirectly, at least persist LS (done above)
      }

      // 2) if socket is connected, announce rename (optional but nice for presence UIs)
      const ws   = window.LogFeedWS?.getSocket?.();
      const room = window.LogFeedWS?.getRoom?.() || new URLSearchParams(location.search).get('room') || 'lobby';
      if (ws && ws.readyState === 1 && prev && prev !== name) {
        ws.send(JSON.stringify({
          type: 'presence',
          room,
          ts: Date.now(),
          user: { name },                     // new current name
          data: { status: 'rename', from: prev, to: name }  // receivers can treat as join/update
        }));
      }
    } catch {}

    // (optional) notify any other modules (typing/status) that name changed
    try { document.dispatchEvent(new CustomEvent('displayname:changed', { detail: { name } })); } catch {}
  }

  // modal open/close
  function openModal(prefill='') {
    input.value = prefill || getName() || '';
    modal.hidden = false; modal.setAttribute('aria-hidden','false');
    setTimeout(()=>input.focus(), 0);
  }
  function closeModal() {
    modal.setAttribute('aria-hidden','true'); modal.hidden = true;
  }

  // events
  chipEdit?.addEventListener('click', (e)=>{ e.preventDefault(); openModal(); });
  btnCancel?.addEventListener('click', ()=> {
    const LS_KEY = 'lensshare:name';
    const prev = (localStorage.getItem(LS_KEY) || '').trim();
    if ((prev == '') || (prev == 'Guest')) {
      applyName('Guest');
    }
    closeModal();
  });
  btnSave?.addEventListener('click', ()=>{
    const val = (input.value || '').trim();
    applyName(val || 'Guest');
    closeModal();
    // optional: tell others code changed
    document.dispatchEvent(new CustomEvent('displayname:changed', { detail: { name: getName() }}));
  });
  input?.addEventListener('keydown', (e)=>{
    if (e.key === 'Enter') { e.preventDefault(); btnSave.click(); }
    if (e.key === 'Escape') { e.preventDefault(); closeModal(); }
  });

  // bootstrap flow: ensure name BEFORE WebSocket connect
  window.initWS = window.initWS || function(){ /* your connect() assigned elsewhere */ };

  (function bootstrap(){
    const current = getName();
    if (!current) {
      // delay WS until we have a name
      openModal('');
      // when saved above, we don't auto-call initWS to avoid surprise connect;
      // if you want auto-connect after first save, uncomment:
      btnSave?.addEventListener('click', ()=> { window.initWS?.(); }, { once:true });
    } else {
      applyName(current);
      window.initWS?.(); // connect now that name is known
    }
  })();

  // expose for any other parts
  window.setDisplayName = (n)=>applyName(n);
})();