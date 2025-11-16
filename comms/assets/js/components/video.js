/**
 * Video Chat (Jitsi IFrame API)
 * - Prepopulates lobby name from ?name= or localStorage('lensshare:name')
 * - Loads external_api.js from the same host as data-jitsi
 * - Creates/tears down the Jitsi instance on open/close (stops cam/mic)
 * - Persists open state per room in sessionStorage
 */
(function(){
  const btnToggle = document.getElementById('btn-video-toggle');
  if (!btnToggle) return;

  const panel    = document.getElementById('video-panel');
  const frameEl  = panel.querySelector('.video-frame');
  const btnLeave = document.getElementById('btn-video-leave');
  const btnPop   = document.getElementById('btn-video-pop');

  const jitsiUrlStr = btnToggle.getAttribute('data-jitsi'); // e.g. https://video-lensshare.com/beans
  if (!jitsiUrlStr) return;

  const jitsiURL  = new URL(jitsiUrlStr);
  const jitsiHost = jitsiURL.host;               // video-lensshare.com
  // roomName = last non-empty segment of the path ("/beans" -> "beans")
  const pathParts = jitsiURL.pathname.split('/').filter(Boolean);
  const roomName  = pathParts[pathParts.length - 1] || 'logfeed';

  // Per-room persistence
  const roomSlug = window.COMMS_ROOM_SLUG || null;
  const stateKey = 'logfeed_video_open_' + roomSlug;

  // Name source: ?name=.. or localStorage('lensshare:name') or "Guest"
  const qs = new URLSearchParams(location.search);
  let displayName = (window.PENDING_DISPLAY_NAME || localStorage.getItem('lensshare:name') || 'Guest').trim();

  let jitsiApi = null;
  let apiScriptLoaded = false;

  function setBtnJoined(joined){
    btnToggle.textContent = joined ? '🎥 Joined (click to hide)' : '🎥 Join video chat';
  }

  function loadJitsiScript(origin) {
    return new Promise((resolve, reject) => {
      if (apiScriptLoaded || window.JitsiMeetExternalAPI) return resolve();
      const s = document.createElement('script');
      s.src = `${origin}/external_api.js`;   // same host as your Jitsi instance
      s.async = true;
      s.onload = () => { apiScriptLoaded = true; resolve(); };
      s.onerror = () => reject(new Error('Failed to load Jitsi external_api.js'));
      document.head.appendChild(s);
    });
  }

  /**
   * Core Jitsi setup logic
   * - Loads external_api.js (once)
   * - Creates #jitsi-embed-<roomSlug> mount
   * - Creates JitsiMeetExternalAPI instance
   * - Shows the panel and updates button state
   */
  async function initJitsi() {
    // ensure external_api.js is present
    try {
      await loadJitsiScript(jitsiURL.origin);
    } catch (e) {
      console.warn('[Jitsi] external_api load failed:', e);
      return;
    }

    // clean container
    frameEl.innerHTML = '';

    // Create a host div for Jitsi
    const mount = document.createElement('div');
    mount.id = 'jitsi-embed-' + roomSlug;
    mount.className = 'jitsi-mount';   // <-- uses the responsive CSS above
    frameEl.innerHTML = '';
    frameEl.appendChild(mount);

    // Pop-out link (lobby enabled)
    const popUrl = new URL(jitsiUrlStr);
    popUrl.hash = 'config.prejoinPageEnabled=true';
    btnPop.href = popUrl.toString();

    // Refresh display name from latest state
    displayName = (window.PENDING_DISPLAY_NAME || localStorage.getItem('lensshare:name') || 'Guest').trim();

    // Create the Jitsi API instance
    try {
      jitsiApi = new window.JitsiMeetExternalAPI(jitsiHost, {
        roomName,
        parentNode: mount,
        configOverwrite: {
          prejoinPageEnabled: true
        },
        interfaceConfigOverwrite: {
          // optional interface tweaks
        },
        userInfo: {
          displayName
        }
      });

      // expose for debugging if needed
      window.jitsiApi = jitsiApi;

    } catch (e) {
      console.warn('[Jitsi] failed to initialize:', e);
      frameEl.innerHTML = '<div class="muted" style="padding:8px">Could not load video chat.</div>';
      return;
    }

    // Show panel + update UI state
    panel.classList.remove('hidden');
    panel.setAttribute('aria-hidden', 'false');
    setBtnJoined(true);
    //sessionStorage.setItem(stateKey, '1');
    if (window.innerWidth > 900) {
      panel.scrollIntoView({behavior: 'smooth', block: 'nearest'});
    }
  }

  async function openPanel(){
    if (!panel.classList.contains('hidden')) return;
    await initJitsi();
  }

  function closePanel(){
    if (panel.classList.contains('hidden')) return;

    // Dispose Jitsi to release devices
    try { jitsiApi && jitsiApi.dispose(); } catch {}
    jitsiApi = null;

    frameEl.innerHTML = '';
    panel.classList.add('hidden');
    panel.setAttribute('aria-hidden', 'true');
    setBtnJoined(false);
    //sessionStorage.removeItem(stateKey);
  }

  btnToggle.addEventListener('click', function(ev){
    ev.preventDefault();
    if (panel.classList.contains('hidden')) openPanel(); else closePanel();
  });

  btnLeave.addEventListener('click', function(){ closePanel(); });

  // Keyboard shortcut: V to toggle (unless typing)
  document.addEventListener('keydown', function(ev){
    const t = ev.target;
    const inField = t && (t.tagName === 'INPUT' || t.tagName === 'TEXTAREA' || t.isContentEditable);
    if (inField) return;
    if (ev.key.toLowerCase() === 'v') {
      ev.preventDefault();
      if (panel.classList.contains('hidden')) openPanel(); else closePanel();
    }
  });

  // Restore previous state on reload (optional)
  /*
  if (sessionStorage.getItem(stateKey) === '1') {
    openPanel();
  } else {
    setBtnJoined(false);
  }
  */

  // 🔓 Expose a tiny API so layout/init code can force Jitsi to mount
  window.CommsVideo = window.CommsVideo || {};
  window.CommsVideo.initJitsi = initJitsi;
})();
