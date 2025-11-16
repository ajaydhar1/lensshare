/* watch together */

(function(){
  const roomSlug = window.COMMS_ROOM_SLUG || null;
  const csrf = WATCH_CONFIG.csrf || '';
  const API  = WATCH_CONFIG.api  || '';

  const btnToggle = document.getElementById('btn-watch-toggle');
  const panel     = document.getElementById('watch-panel');
  const btnClose  = document.getElementById('watch-leave');
  const hostChk   = document.getElementById('watch-host');
  const urlInput  = document.getElementById('watch-url');
  const loadBtn   = document.getElementById('watch-load');
  const statusEl  = document.getElementById('watch-status');
  const btnReset = document.getElementById('watch-reset');

  let player, isHost = false, lastSeen = null, curVideo = null, ignoreNext = false;
  let pollTimer = null, pushTimer = null;

  function setBtnOpened(opened){
    btnToggle.textContent = opened ? '🎬 Opened (click to hide)' : '🎬 Watch together';
  }

  function parseYouTubeId(input){
    if (!input) return null;
    const s = String(input).trim();

    // 1) Raw 11-char ID
    const idPattern = /^[a-zA-Z0-9_-]{11}$/;
    if (idPattern.test(s)) return s;

    // 2) Try URL parsing
    try {
      const url = new URL(s);
      // Standard: ?v=ID (handles playlist params too)
      const v = url.searchParams.get('v');
      if (v && idPattern.test(v)) return v;

      // Shorts
      let m = url.pathname.match(/\/shorts\/([a-zA-Z0-9_-]{11})/);
      if (m) return m[1];

      // Embed
      m = url.pathname.match(/\/embed\/([a-zA-Z0-9_-]{11})/);
      if (m) return m[1];

      // youtu.be/ID
      if (url.hostname.replace(/^www\./,'') === 'youtu.be') {
        const seg = url.pathname.split('/').filter(Boolean)[0];
        if (seg && idPattern.test(seg)) return seg;
      }
    } catch(e) { /* not a URL, fall through */ }

    // 3) Last resort: find the first 11-char token after 'v=' anywhere
    const m = s.match(/[?&]v=([a-zA-Z0-9_-]{11})/);
    if (m) return m[1];

    // 4) Super last resort: any 11-char token in the string
    const any = s.match(/([a-zA-Z0-9_-]{11})/);
    return any ? any[1] : null;
  }

  loadBtn?.addEventListener('click', async ()=>{
    if (!isHost) return status('Only host can load.', true);
    const raw = urlInput.value.trim();
    const vid = parseYouTubeId(raw);

    console.log('[watch] parsed video id:', vid, 'from', raw);
    if (!vid) return status('Paste a valid YouTube link or 11-char ID.', true);

    curVideo = vid.replace(/[^\w\-]/g,'').slice(0,11);  // extra sanitize

    ensurePlayer(()=> {
      try {
        // 1) cue first (no autoplay)
        player.cueVideoById({ videoId: curVideo, startSeconds: 0, suggestedQuality: "large" });
        document.getElementById('yt-player').style.display = 'block';
        // 2) publish paused state so viewers load too
        pushState('paused', 0);
        status('Loaded video');
      } catch (e) {
        status('Could not cue video id.', true);
        console.error('YT cueVideoById error', e);
      }
    });
  });


  function openPanel(){ panel.classList.remove('hidden'); setBtnOpened(true); panel.setAttribute('aria-hidden','false'); panel.scrollIntoView({behavior:'smooth'}); }
  function closePanel(){ panel.classList.add('hidden'); setBtnOpened(false); panel.setAttribute('aria-hidden','true'); stopTimers(); }
  function stopTimers(){ if (pollTimer) clearInterval(pollTimer); pollTimer=null; if (pushTimer) clearInterval(pushTimer); pushTimer=null; }

  btnToggle?.addEventListener('click', (e)=>{
    e.preventDefault();

    const isHidden = panel.classList.contains('hidden');

    if (isHidden) {
      // OPEN
      openPanel();
      //ensurePlayer();     // make sure player exists (no-op if already created)
      //startPolling();     // begin GET loop
      // a11y + UI hint
      btnToggle.setAttribute('aria-expanded','true');
      // auto two-up on desktop
      if (typeof autoTwoUpIfWide === 'function') autoTwoUpIfWide();
      try { window.LogFeedPlayer?.unmute?.(); } catch {}
    } else {
      // CLOSE (no reset)
      hideWatchPanelKeepState();
    }
  });

  btnClose?.addEventListener('click', ()=>{ 
    try { window.LogFeedPlayer?.mute?.(); } catch {}
    stopTimers();               // fine to stop local polling
    panel.classList.add('hidden');
    panel.setAttribute('aria-hidden','true');
    status('');                 // clear any status text
    // keep player instance alive so reopening is instant
  });

  hostChk?.addEventListener('change', ()=>{ isHost = hostChk.checked; status(`Mode: ${isHost?'host':'viewer'}`); if (isHost){ startPushLoop(); } else { if (pushTimer) clearInterval(pushTimer); pushTimer=null; } });

  function status(msg, err=false){ statusEl.textContent = msg; statusEl.style.color = err ? '#fca5a5' : '#94a3b8'; }

  function hideWatchPanelKeepState(){
    try { window.LogFeedPlayer?.mute?.(); } catch {}
    // stop polling/pushing, but do NOT destroy player or clear DB state
    stopTimers();
    panel.classList.add('hidden');
    panel.setAttribute('aria-hidden','true');

    setBtnOpened(false);
    // if you auto-enable two-up on open, turn it off on hide:
    //setTwoUp && setTwoUp(false);
    // reflect collapsed state on the button for a11y
    const btn = document.getElementById('btn-watch-toggle');
    if (btn) btn.setAttribute('aria-expanded','false');
  }

  function destroyPlayer() {
    try { player && player.stopVideo && player.stopVideo(); } catch(e){}
    try { player && player.destroy && player.destroy(); } catch(e){}
    player = null;
    // Clear the iframe container to guarantee a fresh instance next time
    const holder = document.getElementById('yt-player');
    if (holder) holder.innerHTML = '';
  }

  function clearLocalWatchState() {
    curVideo = null;
    lastSeen = null;
    ignoreNext = false;
    // Stop loops
    stopTimers();
  }

  async function resetRoomState() {
    // POST op=reset to the API
    try {
      const body = new URLSearchParams();
      body.set('room', roomSlug);
      body.set('csrf', csrf);
      body.set('op', 'reset');
      const r = await fetch(API, { method:'POST', headers:{'Content-Type':'application/x-www-form-urlencoded'}, body });
      const j = await r.json().catch(()=> ({}));
      if (!r.ok) {
        console.error('watch_sync reset failed', r.status, j);
        status('Reset failed', true);
        return false;
      }
      return true;
    } catch (e) {
      console.error('watch_sync reset error', e);
      status('Reset failed', true);
      return false;
    }
  }

  function wsBroadcastWatchClear(){
    const ws   = LogFeedWS.getSocket?.();
    const room = LogFeedWS.getRoom?.();
    const name = LogFeedWS.getName?.() || 'Guest';
    if (!ws || ws.readyState !== 1 || !room) return;
    ws.send(JSON.stringify({
      type: 'sync',
      room,
      ts: Date.now(),
      user: { name },
      data: { action: 'clear' } // handle in applySync
    }));
  }

  function isUserHost(){ return !!document.getElementById('watch-host')?.checked; }

  btnReset?.addEventListener('click', async (e)=>{

    if (!isUserHost()) { 
      e.preventDefault();
      status('Only host can reset');
      return;
    }

    // Optional confirmation if you like:
    // if (!confirm('Unload and clear watch state for this room?')) return;

    status('Resetting…');
    // 1) Nuke local player + timers
    destroyPlayer();
    clearLocalWatchState();

    // 2) Clear server-side sync (host or viewer can do this — CSRF covers intent)
    const ok = await resetRoomState();

    // 3) UI cleanup
    urlInput.value = '';
    hostChk.checked = false;
    isHost = false;

    // 4) Hide the panel (fresh start next time)
    //panel.classList.add('hidden');
    //panel.setAttribute('aria-hidden','true');

    wsBroadcastWatchClear();

    // Fresh status
    status(ok ? 'Reset complete' : 'Reset attempted');
  });



  // YouTube API loader
  let ytReady = !!(window.YT && YT.Player);
  let loadingApi = false;
  //let player = null;
  const playerHostOpts = {      // shared options
    playerVars: {
      modestbranding: 1,
      rel: 0,
      playsinline: 1,
      origin: location.origin  // helps with some embed contexts
    },
    events: {}
  };

  function loadYouTubeAPIOnce(cb){
    if (ytReady) return cb();
    if (loadingApi) { document.addEventListener('yt-ready', cb, { once:true }); return; }
    loadingApi = true;
    window.onYouTubeIframeAPIReady = function(){
      ytReady = true;
      loadingApi = false;
      document.dispatchEvent(new Event('yt-ready'));
    };
    const s = document.createElement('script');
    s.src = "https://www.youtube.com/iframe_api";
    document.head.appendChild(s);
    document.addEventListener('yt-ready', cb, { once:true });
  }

  function ensurePlayer(cb){
    loadYouTubeAPIOnce(function(){
      if (player) return cb && cb();
      // Nuke any stray iframes if re-rendered
      const holder = document.getElementById('yt-player');
      holder.innerHTML = '';

      player = new YT.Player('yt-player', {
        ...playerHostOpts,
        events: {
          'onReady': () => cb && cb(),
          'onStateChange': onStateChange
        }
      });
    });
  }

  function onStateChange(ev){
    if (!isHost) return;        // only host pushes
    if (ignoreNext){ ignoreNext=false; return; }

    const st = ev.data;
    let state = null;
    if (st === YT.PlayerState.PLAYING) state = 'playing';
    else if (st === YT.PlayerState.PAUSED || st === YT.PlayerState.ENDED) state = 'paused';
    if (!state) return;

    const pos = safeTime();
    pushState(state, pos);
  }

  function safeTime(){
    try { return Math.max(0, Math.round((player.getCurrentTime()||0)*10)/10); } catch(e){ return 0; }
  }

  function startPolling(){
    stopTimers();
    pollTimer = setInterval(pullState, 1500);
    if (isHost) startPushLoop();
  }

  function startPushLoop(){
    if (pushTimer) clearInterval(pushTimer);
    pushTimer = setInterval(()=>{
      if (!isHost) return;
      if (!player || typeof player.getPlayerState!=='function') return;
      const st = player.getPlayerState();
      const state = (st === YT.PlayerState.PLAYING) ? 'playing' : 'paused';
      pushState(state, safeTime(), /*silent*/ true);
    }, 2000);
  }

  async function pullState(){
    try{
      const r = await fetch(`${API}?room=${encodeURIComponent(roomSlug)}`);
      const j = await r.json();

      // Inside pullState() right after you get `j`
      if (!/^[a-zA-Z0-9_-]{11}$/.test(j.video_id)) {
        status('Sync has invalid video id; waiting for host to publish a valid one.', true);
        return;
      }

      if (!j.exists) { status('No active watch session'); return; } // nothing published yet
      // If new state
      if (lastSeen === j.updated_at) return;
      lastSeen = j.updated_at;

      ensurePlayer(()=>{
        if (curVideo !== j.video_id){
          curVideo = j.video_id;
          ignoreNext = true;
          player.cueVideoById({ videoId: curVideo, startSeconds: j.position||0 });
          // then handle play/pause below as usual

          //player.loadVideoById({videoId: curVideo, startSeconds: j.position||0});
        } else {
          // adjust state/position
          const localPos = safeTime();
          const drift = Math.abs(localPos - (j.position||0));
          const needSeek = drift > 0.75;

          if (j.state === 'playing'){
            if (needSeek) { ignoreNext=true; player.seekTo(j.position, true); }
            if (player.getPlayerState() !== YT.PlayerState.PLAYING){ ignoreNext=true; player.playVideo(); }
          } else { // paused
            if (needSeek) { ignoreNext=true; player.seekTo(j.position, true); }
            if (player.getPlayerState() === YT.PlayerState.PLAYING){ ignoreNext=true; player.pauseVideo(); }
          }
        }
        status(`Synced @ ${j.position.toFixed(1)}s • ${j.state}`);
      });

    } catch(e){ /* ignore transient errors */ }
  }

  let pushInFlight = false;
  async function pushState(state, position, silent){
    if (!isHost || pushInFlight) return;
    if (!curVideo){
      // If host started playing an existing embed, capture its id:
      try {
        const data = player && player.getVideoData ? player.getVideoData() : null;
        curVideo = data && data.video_id ? data.video_id : curVideo;
      } catch(e){}
      if (!curVideo) return;
    }
    pushInFlight = true;
    try{
      const body = new URLSearchParams();
      body.set('room', roomSlug);
      body.set('csrf', csrf);
      body.set('video_id', curVideo);
      body.set('state', state);
      body.set('position', String(position||0));
      const r = await fetch(API, { method:'POST', headers:{'Content-Type':'application/x-www-form-urlencoded'}, body });
      const j = await r.json();

      if (!r.ok) { console.error('watch_sync POST failed', r.status, j); }

      if (!silent) status('Broadcasted');
      if (j && j.updated_at) lastSeen = j.updated_at;
    }catch(e){
      if (!silent) status('Broadcast failed', true);
    }finally{ pushInFlight = false; }
  }

})();

/* Watch together side-by-side */

(function(){

  // ---- config / derived keys
  const qs   = new URLSearchParams(location.search);
  const ROOM = qs.get('room') || 'lobby';
  const TWO_UP_KEY = `logfeed:twoUp:${ROOM}`; // <-- define the key

  const btnToggle = document.getElementById('btn-watch-toggle');
  const btnClose  = document.getElementById('watch-leave');
  const btnReset = document.getElementById('watch-reset');

  const btnVideoToggle = document.getElementById('btn-video-toggle');
  const btnLeave = document.getElementById('btn-video-leave');

  // NEW: side-by-side toggle
  const btnTwoUp  = document.getElementById('btn-two-up');
  const mainPanel = document.querySelector('main.panel');

  const btnFuturistic = document.getElementById('btn-futuristic');

  function setTwoUp(on){
    if (!mainPanel) return;
    if (on) {
      mainPanel.classList.add('viewer-two-up');
      //sessionStorage.setItem(TWO_UP_KEY, '1');
    } else {
      mainPanel.classList.remove('viewer-two-up');
      //sessionStorage.removeItem(TWO_UP_KEY);
    }
  }

  function setTwoToThreeUp(on){
    if (!mainPanel) return;
    if (on) {
      mainPanel.classList.remove('viewer-two-up');
      mainPanel.classList.add('viewer-three-up');
      //btnFuturistic.classList.remove('hidden');
      //sessionStorage.setItem(THREE_UP_KEY, '1');
    } else {
      mainPanel.classList.remove('viewer-three-up');
      mainPanel.classList.add('viewer-two-up');
      //btnFuturistic.classList.add('hidden');
      //sessionStorage.removeItem(THREE_UP_KEY);
    }
  }

  function initThreeUp() {
    if (!mainPanel) return;

    const watchPanel = document.getElementById('watch-panel');
    const videoPanel = document.getElementById('video-panel');

    // Make sure both panels are visible
    if (watchPanel) {
      watchPanel.classList.remove('hidden');
      watchPanel.setAttribute('aria-hidden', 'false');
    }
    if (videoPanel) {
      videoPanel.classList.remove('hidden');
      videoPanel.setAttribute('aria-hidden', 'false');
    }

    if (window.CommsVideo && typeof window.CommsVideo.initJitsi === 'function') {
      window.CommsVideo.initJitsi();
    }

    // Set layout to three-up
    setTwoUp(true);
    setTwoToThreeUp(true);

    // Fix button states
    const watchBtn = document.getElementById('btn-watch-toggle');
    const videoBtn = document.getElementById('btn-video-toggle');

    if (watchBtn) {
      watchBtn.textContent = '🎬 Opened (click to hide)';
      watchBtn.setAttribute('aria-expanded', 'true');
    }

    if (videoBtn) {
      videoBtn.textContent = '🎥 Joined (click to hide)';
      videoBtn.setAttribute('aria-expanded', 'true');
    }
    

    // Fix button states (if they exist)
    if (btnToggle) {
      btnToggle.setAttribute('aria-expanded', 'true');
    }
    if (btnVideoToggle) {
      btnVideoToggle.setAttribute('aria-expanded', 'true');
    }
  }

  // Optional: expose it globally so other code can call it
  window.CommsLayout = window.CommsLayout || {};
  window.CommsLayout.initThreeUp = initThreeUp;


  // Button: manual toggle (S key also)
  //btnTwoUp?.addEventListener('click', (e)=>{ e.preventDefault(); setTwoUp(!mainPanel.classList.contains('viewer-two-up')); });

  document.addEventListener('keydown', (ev)=>{
    const t = ev.target;
    const inField = t && (t.tagName === 'INPUT' || t.tagName === 'TEXTAREA' || t.isContentEditable);
    if (inField) return;
    if (ev.key.toLowerCase() === 's') {
      setTwoUp(!mainPanel.classList.contains('viewer-two-up'));
    }
  });

  // Auto-enable two-up when Watch panel opens (desktop)
  function autoTwoUpIfWide(){
    if (window.matchMedia('(min-width: 901px)').matches) setTwoUp(true);
  }

  // Hook into your existing Watch open/close/reset flows
  // When the user opens watch panel:
  //btnToggle?.addEventListener('click', ()=> { autoTwoUpIfWide(); });
  

  // Hook into existing Watch open/close button and show/hide side-by-side view
  btnToggle?.addEventListener('click', ()=> {
    if (!mainPanel.classList.contains('viewer-two-up') && !mainPanel.classList.contains('viewer-three-up')) {
      setTwoUp(true);
    }
    else if (mainPanel.classList.contains('viewer-two-up') && (!document.getElementById("video-panel").classList.contains('hidden'))) {
      setTwoToThreeUp(true);
    }
    else if (mainPanel.classList.contains('viewer-two-up') && (document.getElementById("video-panel").classList.contains('hidden'))) {
      setTwoUp(false);

    }
    else if (mainPanel.classList.contains('viewer-three-up')) {
      setTwoToThreeUp(false);
    }
    else {
      setTwoUp(false);
    }
  });
  btnVideoToggle?.addEventListener('click', ()=> {
    if (!mainPanel.classList.contains('viewer-two-up') && !mainPanel.classList.contains('viewer-three-up')) {
      setTwoUp(true);
    }
    else if (mainPanel.classList.contains('viewer-two-up') && (!document.getElementById("watch-panel").classList.contains('hidden'))) {
      setTwoToThreeUp(true);
    }
    else if (mainPanel.classList.contains('viewer-two-up') && (document.getElementById("watch-panel").classList.contains('hidden'))) {
      setTwoUp(false);

    }
    else if (mainPanel.classList.contains('viewer-three-up')) {
      setTwoToThreeUp(false);
    }
    else {
      setTwoUp(false);
    }
  });

  btnLeave?.addEventListener('click', ()=> {
    if (mainPanel.classList.contains('viewer-three-up')) {
      setTwoToThreeUp(false);
    }
    else {
      setTwoUp(false);
    }
  });

  btnClose?.addEventListener('click', ()=> {
    if (mainPanel.classList.contains('viewer-three-up')) {
      setTwoToThreeUp(false);
    }
    else {
      setTwoUp(false);
    }
  });


  // When leaving watch panel:
  //btnClose?.addEventListener('click', ()=> { setTwoUp(false); });

  // When resetting (Unload):

  /*  
  function isUserHost(){ return !!document.getElementById('watch-host')?.checked; }

  btnReset?.addEventListener('click', (e)=> {
    if (!isUserHost()) { 
      e.preventDefault();
      status('Only host can reset');
      return;
    }
    setTwoUp(false);
  });
  */

  // Restore previous choice this session
  if (sessionStorage.getItem(TWO_UP_KEY) === '1') setTwoUp(true);
})();
