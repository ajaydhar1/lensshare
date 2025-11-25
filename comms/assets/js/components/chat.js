/* Intercept chat message form submit → send via WS (fallback to normal POST) */

(() => {
  const form = document.getElementById('composer') || document.querySelector('form.stack');
  if (!form) return;

  const roomInput = form.querySelector('input[name="room"]');
  const csrfInput = form.querySelector('input[name="csrf"]');
  const userInput = form.querySelector('input[name="user"]');
  const bodyInput = form.querySelector('textarea[name="body"]');

  // derive room/name
  const qs = new URLSearchParams(location.search);
  const ROOM = (roomInput?.value || qs.get('room') || 'lobby');
  const savedName = localStorage.getItem('lensshare:name') || qs.get('name') || '';
  if (savedName && userInput && !userInput.value) userInput.value = savedName;

  async function persist(name, text){
    // your JSON API — include CSRF if your endpoint checks it
    const payload = { name, text, csrf: csrfInput?.value || null };
    try {
      await fetch(`/api/chat_append.php?room=${encodeURIComponent(ROOM)}`, {
        method: 'POST',
        headers: {'Content-Type':'application/json'},
        body: JSON.stringify(payload)
      });
    } catch {}
  }

  form.addEventListener('submit', async (e) => {
    const name = (window.LogFeedWS?.getName?.() || localStorage.getItem('lensshare:name') || 'Guest').trim();
    const text = (bodyInput?.value || '').trim();
    if (!text) {
      // allow native validation UX
      if (bodyInput) bodyInput.focus();
      e.preventDefault();
      return;
    }
    localStorage.setItem('lensshare:name', name);

    // If WS is ready, use it + prevent default POST
    const ws = window.LogFeedWS?.getSocket?.();
    const wsOpen = ws && ws.readyState === 1;

    if (wsOpen && window.LogFeedWS?.sendChat) {
      e.preventDefault();
      // set the runtime name in WS glue
      window.LogFeedWS.setName?.(name);
      window.LogFeedWS.sendChat(text);   // does pending bubble + WS send + persist()
      bodyInput.value = '';
      bodyInput.focus();
      return;
    }

    // Fallback: let the normal POST go through to same URL
    // (server should insert + 303 redirect to avoid resubmits)
    // If you prefer AJAX even without WS, uncomment:
    /*
    e.preventDefault();
    await persist(name, text);
    bodyInput.value = '';
    bodyInput.focus();
    */
  });
})();


/**
 * LogFeed Realtime Chat — unified (WS + form + <pre> / bubble renderer)
 * Requires: window.WS_URL set earlier.
 */
(() => {
  // ------- config / elements -------
  const qs   = new URLSearchParams(location.search);
  const ROOM = qs.get('room') || 'lobby';
  const NAME_QS = (qs.get('name') || '').trim();
  const LS_NAME_KEY = 'lensshare:name';

  // composer form (fallback POST target = same URL)
  const form = document.querySelector('form.stack');
  const userInput = form?.querySelector('input[name="user"]');
  const bodyInput = form?.querySelector('textarea[name="body"]');

  // messages panel: prefer bubble panel, else <pre id="log">
  const panel =
    document.getElementById('panelMessages') ||
    document.querySelector('[data-panel="messages"]') ||
    document.getElementById('log');

  const isPre = panel && panel.tagName === 'PRE';

  // identity
  const saved = localStorage.getItem(LS_NAME_KEY);
  if (saved && userInput && !userInput.value) userInput.value = saved;
  const initialName = (userInput?.value || NAME_QS || saved || 'Guest').trim();
  if (initialName !== saved) localStorage.setItem(LS_NAME_KEY, initialName);

  // ------- helpers -------
  const esc = s => String(s).replace(/[&<>"']/g, m=>({ '&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;' }[m]));
  const fmtTime = (ts) => ts ? new Date(ts).toLocaleTimeString() : '';
  function fmtStamp(ts) {
    if (!ts) return '';
    const d = new Date(ts);
    const yyyy = d.getFullYear();
    const mm   = String(d.getMonth()+1).padStart(2,'0');
    const dd   = String(d.getDate()).padStart(2,'0');
    const hh   = String(d.getHours()).padStart(2,'0');
    const mi   = String(d.getMinutes()).padStart(2,'0');
    return `${yyyy}-${mm}-${dd} ${hh}:${mi}`;
  }
  const getName = () => (userInput?.value || localStorage.getItem(LS_NAME_KEY) || 'Guest').trim();


  function isFromSelf(msg){
    // Next: nonce echo (if the server bounces our message back)
    if (msg.nonce && window._ownNonces?.has(msg.nonce)) return true;

    return false;
  }

  function renderIncoming({ name, text, ts, nonce }) {
    const fromSelf = isFromSelf({ nonce });
    const who  = name || 'Guest';
    const when = fmtStamp(ts);
    const line = `[${when}] <${who}> ${text || ''}`;

    // toast only if not from self
    if (!fromSelf) {
      Toaster.showToast({
        text: `${who}: ${line}`,
        kind: 'info',
        timeout: 4500,
        place: 'top',
        onClick: () => {
          const url = new URL(window.location.href);
          const isPostView = url.searchParams.get('view') === 'post';
          if (!isPostView) return false;

          // Resolve the room slug
          const room =
            url.searchParams.get('room') ||
            (window.session && window.session.roomSlug) ||
            document.body?.dataset?.room ||
            'demo'; // final fallback (optional)

          // Build a clean URL with ONLY ?room=...
          const clean = `${url.origin}${url.pathname}?room=${encodeURIComponent(room)}`;

          // Navigate (replace avoids adding a new history entry; use assign() if you prefer)
          window.location.replace(clean);
        }
      });
    }

    if (!panel) return;

    // Don't add another row for messages from self (renderOutgoing handles those)
    if (fromSelf) {
      return;
    }

    if (isPre) {
      // legacy <pre> mode — keep simple text form
      const needsNL = panel.textContent && !panel.textContent.endsWith('\n');
      panel.textContent += (needsNL ? '\n' : '') + line;
    } else {
      // New div-based chat log – match PHP structure
      const row = document.createElement('div');
      row.className = 'chat-line chat-line-incoming';

      const meta = `[${when}] <${who}> `;

      row.innerHTML = `
        <span class="chat-meta">${esc(meta)}</span>
        <span class="chat-body">${esc(text || '')}</span>
      `;

      panel.appendChild(row);
    }

    panel.scrollTop = panel.scrollHeight;
  }

  function renderOutgoing({ name, text, tempId }) {
    if (!panel || isPre) return; // still bail in <pre> mode, just in case

    const row = document.createElement('div');
    row.className = 'chat-line chat-line-outgoing pending';
    if (tempId) {
      row.setAttribute('data-temp-id', tempId);
    }

    // Build a timestamp similar to PHP: date('Y-m-d H:i')
    const now = new Date();
    const pad = n => n.toString().padStart(2, '0');
    const ts =
      now.getFullYear() + '-' +
      pad(now.getMonth() + 1) + '-' +
      pad(now.getDate()) + ' ' +
      pad(now.getHours()) + ':' +
      pad(now.getMinutes());

    const who = name || 'Me';
    const meta = `[${ts}] <${who}> `;

    row.innerHTML = `
      <span class="chat-meta">${esc(meta)}</span>
      <span class="chat-body">${esc(text || '')}</span>
    `;

    panel.appendChild(row);
    panel.scrollTop = panel.scrollHeight;
  }

  function resolvePending(tempId, serverTs) {
    if (!panel || isPre || !tempId) return;
    const el = panel.querySelector(`.msg.pending[data-temp-id="${CSS.escape(tempId)}"]`);
    if (el) {
      el.classList.remove('pending');
      const m = el.querySelector('.muted');
      if (m) m.textContent = fmtStamp(serverTs) || 'sent';
    }
  }

  // ------- socket with queue + logs -------
  let ws = null, retry = 0;
  const outbox = [];

  function sendRaw(msg){
    msg.room = msg.room || ROOM;
    msg.ts = Date.now();
    if (ws && ws.readyState === 1) {
      console.log('[WS] OUT', msg);
      ws.send(JSON.stringify(msg));
    } else {
      console.log('[WS] QUEUE', msg);
      outbox.push(msg);
    }
  }

  function connect(){
    console.log('[WS] connecting to', window.WS_URL);
    ws = new WebSocket(window.WS_URL);
    window._lf_ws = ws; // for DevTools

    ws.addEventListener('open', () => {
      console.log('[WS] open');
      retry = 0;
      sendRaw({ type:'presence', user:{name:getName()}, data:{status:'join'} });
      // flush queued messages
      while (outbox.length && ws.readyState === 1) ws.send(JSON.stringify(outbox.shift()));
    });

    ws.addEventListener('message', (e) => {
      console.log('[WS] IN', e.data);
      let msg; try { msg = JSON.parse(e.data); } catch { return; }
      if (msg.type === 'chat') {
        const d = msg.data || {};
        if (d.tempId) resolvePending(d.tempId, msg.serverTs || msg.ts);
        renderIncoming({ name: msg.user?.name, text: d.text, ts: msg.serverTs || msg.ts, nonce: msg.nonce });
      }
      // (presence/control/sync hooks later)
    });

    ws.addEventListener('close', (e) => {
      console.log('[WS] close', e.code, e.reason);
      setTimeout(connect, Math.min(1000*(++retry), 10000));
    });

    ws.addEventListener('error', (e) => {
      console.log('[WS] error', e.message || e);
    });
  }

  // one-time: a per-tab client id (fallback if you don't have userId)
  window.CLIENT_ID = window.CLIENT_ID || (crypto.randomUUID?.() || String(Math.random()).slice(2));

  // ------- sending (WS + optional persist to same URL) -------
  function sendChat(text){
    const name = getName() || 'Guest';
    localStorage.setItem(LS_NAME_KEY, name);

    const trimmed = (text||'').trim();
    if (!trimmed) return;

    const tempId = 'tmp_' + Math.random().toString(36).slice(2);
    renderOutgoing({ name, text: trimmed, tempId });


    const nonce = (crypto.getRandomValues ? crypto.getRandomValues(new Uint32Array(1))[0] : Date.now()) + '';
    // remember our own nonces briefly (for echo suppression)
    window._ownNonces = window._ownNonces || new Set();
    window._ownNonces.add(nonce);
    setTimeout(() => window._ownNonces.delete(nonce), 15000); // 15s TTL


    sendRaw({
      type: 'chat',
      user: { name },
      data: { text: trimmed, tempId },
      nonce
    });

    // persist to PHP handler (same page); respects your CSRF/validation/PRG on server
    if (form) {
      const fd = new FormData(form);
      fd.set('user', name);
      fd.set('body', trimmed);
      fetch(location.pathname + location.search, {
        method:'POST', body: fd, headers:{'X-Requested-With':'fetch'}
      }).catch(()=>{});
    }
  }

  // ------- intercept form submit (progressive enhancement) -------
  if (form) {
    form.addEventListener('submit', (e) => {
      const text = (bodyInput?.value || '').trim();
      if (!text) { e.preventDefault(); bodyInput?.focus(); return; }
      e.preventDefault();
      sendChat(text);
      bodyInput.value = '';
      bodyInput.focus();
    });
  }

  // expose minimal API if needed elsewhere
  window.LogFeedWS = { sendChat, getSocket:()=>ws, getRoom:()=>ROOM, getName };

  // go
  if (!window.WS_URL) console.warn('[WS] window.WS_URL is not set');
  connect();
})();


/**
 * Scroll the chat window to the focus message or last message when the DOM is ready
 */
document.addEventListener('DOMContentLoaded', function () {
    const log    = document.getElementById('log');
    const params = new URLSearchParams(window.location.search);
    const focusId = params.get('focus');

    if (focusId) {
        const el = document.getElementById('msg-' + focusId);
        if (el) {
            // Run after layout so nothing overrides it
            setTimeout(function () {
                el.scrollIntoView({ block: 'center', behavior: 'auto' });

                el.classList.add('highlight-focus');
                setTimeout(function () {
                    el.classList.remove('highlight-focus');
                }, 5000);
            }, 0);
        } else if (log) {
            // Fallback: if we *don't* find the focused msg, just scroll to bottom
            log.scrollTop = log.scrollHeight;
        }
    } else if (log) {
        // No focus param → default behavior: scroll to bottom
        log.scrollTop = log.scrollHeight;
    }
});


document.addEventListener('DOMContentLoaded', function () {
    const params  = new URLSearchParams(window.location.search);
    const focusId = params.get('focus');
    if (!focusId) return;

    const el = document.getElementById('msg-' + focusId);
    if (!el) return;

    // Scroll the focused message into view
    el.scrollIntoView({ block: 'center', behavior: 'smooth' });

    // Highlight it briefly
    el.classList.add('highlight-focus');
    setTimeout(function () {
        el.classList.remove('highlight-focus');
    }, 5000);
});
