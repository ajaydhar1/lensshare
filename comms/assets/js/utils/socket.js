/* web socket layer */

window.WS_URL = 'wss://logfeed-socket-broker.onrender.com';


//window.WS_URL = (location.protocol==='https:'?'wss':'ws') + '://YOUR_WS_HOST_OR_DOMAIN';
window.ROOM_KEY = ''; // if you set ROOM_KEY on the server, mirror it here for writes
window.MOD_SIGN = async function(body){ 
  // if using MOD_HMAC_SECRET server-side, compute HMAC on server via your PHP and return hex
  // or, if you accept client-side for now, omit signing until you add a PHP signer
  return '';
};


(function(){
  const ROOM = new URLSearchParams(location.search).get('room') || 'lobby';
  const NAME = new URLSearchParams(location.search).get('name') || 'Guest';
  const WS_URL = window.WS_URL;

  let ws, retry=0;
  function connect(){
    ws = new WebSocket(WS_URL);
    ws.onopen = () => {
      retry=0;
      send({type:'presence', user:{name:NAME}, data:{status:'join'}});
    };
    ws.onmessage = (e) => handle(JSON.parse(e.data));
    ws.onclose = () => setTimeout(connect, Math.min(1000*(++retry), 10000));
  }
  function send(msg){
    msg.room = ROOM;
    msg.ts = Date.now();
    if (window.ROOM_KEY) msg.key = window.ROOM_KEY;
    try { ws && ws.readyState===1 && ws.send(JSON.stringify(msg)); } catch {}
  }

  // Chat API you can call from your UI
  window.logfeedSendChat = function(text){
    const tempId = 'tmp_'+Math.random().toString(36).slice(2);
    renderChatOutgoing({id:tempId, name:NAME, text, pending:true});
    send({type:'chat', user:{name:NAME}, data:{text, tempId}});
    // persist to SQLite in parallel
    fetch('/api/chat_append.php?room='+encodeURIComponent(ROOM), {
      method:'POST', headers:{'Content-Type':'application/json'},
      body: JSON.stringify({name:NAME, text})
    }).catch(()=>{});
  };

  // Watch-Together wiring (expects your wrapper at window.LogFeedPlayer)
  let player = window.LogFeedPlayer;
  function syncPlay(){ send({type:'sync', user:{name:NAME}, data:{action:'play', t:player.currentTime()}}); }
  function syncPause(){ send({type:'sync', user:{name:NAME}, data:{action:'pause', t:player.currentTime()}}); }
  function syncSeek(t){ send({type:'sync', user:{name:NAME}, data:{action:'seek', t}}); }
  function syncLoad(videoId, src){ send({type:'sync', user:{name:NAME}, data:{action:'load', videoId, src, by:{name:NAME}}}); }
  window.attachPlayerSync = function(){
    player.on('play',  () => syncPlay());
    player.on('pause', () => syncPause());
    player.on('seek',  (t) => syncSeek(t));
    player.on('load',  ({videoId, src}) => syncLoad(videoId, src));
  };

  // Mod controls (optional)
  window.logfeedControl = async function(action, payload){
    let data = { action, payload: payload||null };
    if (window.MOD_SIGN) {
      const body = JSON.stringify({ action, payload: payload||null, room: ROOM });
      data.sig = await window.MOD_SIGN(body);
    }
    send({type:'control', user:{name:NAME}, data});
  };

  function handle(msg){
    switch(msg.type){
      case 'chat': {
        const d = msg.data||{};
        resolvePending(d.tempId);
        renderChatIncoming({name: msg.user?.name || 'Guest', text: d.text, ts: msg.serverTs || msg.ts});
        break;
      }
      case 'presence': updatePresenceUI(msg); break;
      case 'control': handleControl(msg.data); break;
      case 'sync': applySync(msg.data, msg.serverTs || msg.ts); break;
    }
  }

  function applySync(data, serverTs){
    if (!player) return;
    const now = Date.now();
    const latency = Math.max(0, (now - serverTs)/1000);
    if (data.action==='load'){
      player.load(data.videoId, data.src);
      document.getElementById('yt-player').style.display = 'block';
        // 2) publish paused state so viewers load too
      // ensure we’re paused after cue, regardless of YT quirks
      if (!player.paused()) player.pause();

      // Video banner style: slightly longer
      Toaster.showToast({
        text: `▶ Now playing: <strong>Watch together</strong> — from ${data.by.name}`,
        kind: 'good',
        timeout: 7200,
        place: 'top',
        onClick: () => {
          console.log('toast click');
          const btn = document.querySelector('a#btn-watch-toggle');
          if (btn && btn.getAttribute('aria-expanded') != 'true') {
            btn.click();
          }
        }
      });

    } else if (data.action==='play'){
      const target = (data.t||0) + latency;
      if (Math.abs(player.currentTime()-target) > 0.3) player.seek(target);
      if (player.paused()) player.play();
    } else if (data.action==='pause'){
      const target = (data.t||0);
      if (!player.paused()) player.pause();
      if (Math.abs(player.currentTime()-target) > 0.3) player.seek(target);
    } else if (data.action==='seek'){
      player.seek(data.t||0);
    } else if (data.action === 'clear') {
      // cue “nothing”: destroy/cue blank depending on your adapter
      try { player.pause(); } catch {}
      // optional: empty the player area:
      document.getElementById('yt-player').style.display = 'none';
      // or cue a blank video/state:
      // (your adapter can expose a clear/unload helper if you prefer)
      return;
    }

  }

  // UI stubs to wire
  function renderChatOutgoing(m){ /* add “sending…” bubble */ }
  function resolvePending(id){ /* swap pending bubble -> real */ }
  function renderChatIncoming(m){ /* render bubble */ }
  function updatePresenceUI(m){ /* avatars / count */ }
  function handleControl(d){ /* clear, pin, pause-room */ }

  connect();
})();


/* Expose & log the socket on the client */

(function(){
  // hook into your existing connect/send if you used my snippet
  const origConnect = window._lf_connect;
  const origSend = window._lf_send;

  // If you didn't keep those names, wrap directly:
  const wsFactory = () => new WebSocket(window.WS_URL);

  // Create (or replace) a debug connection wrapper
  window._lf_connect = function(){
    const ws = (origConnect ? origConnect() : wsFactory());
    ws.addEventListener('open',  () => console.log('[LF] WS open'));
    ws.addEventListener('close', (e) => console.log('[LF] WS close', e.code, e.reason));
    ws.addEventListener('error', (e) => console.log('[LF] WS error', e));
    ws.addEventListener('message', (e) => console.log('[LF] IN  ', e.data));
    window._lf_ws = ws; // expose for console testing
    return ws;
  };

  // Wrap send()
  window._lf_send = function(msg){
    msg = Object.assign({ ts: Date.now() }, msg);
    if (window.ROOM) msg.room = window.ROOM;
    console.log('[LF] OUT ', JSON.stringify(msg));
    try { window._lf_ws && window._lf_ws.readyState === 1 && window._lf_ws.send(JSON.stringify(msg)); } catch (e) { console.log('[LF] send error', e); }
  };

  // If your existing code created the socket already, just attach listeners:
  if (window.ws instanceof WebSocket) {
    window._lf_ws = window.ws;
    window.ws.addEventListener('message', (e)=>console.log('[LF] IN  ', e.data));
  }
})();