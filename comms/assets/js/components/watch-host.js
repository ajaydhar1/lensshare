/**
 * Watch together host control hardening
 */

(() => {
  const inp   = document.getElementById('watch-url');
  const btn   = document.getElementById('watch-load');
  const stat  = document.getElementById('watch-status');
  const hostCk= document.getElementById('watch-host');

  if (!btn || !inp) return;

  function isHost(){ return !!hostCk?.checked; }
  function setStatus(msg){ if (stat) stat.textContent = msg || ''; }

  // Robust YouTube ID extractor (watch, youtu.be, shorts, embed, with extra params)
  function extractYouTubeId(u){
    if (!u) return '';
    try {
      // Allow pasting just an ID too
      if (/^[A-Za-z0-9_-]{10,}$/i.test(u) && !u.includes('://')) return u;
      const url = new URL(u);
      const host = url.hostname.replace(/^www\./,'');
      if (host === 'youtu.be') {
        return url.pathname.split('/').filter(Boolean)[0] || '';
      }
      if (host.endsWith('youtube.com')) {
        const p = url.pathname;
        if (p.startsWith('/watch'))   return url.searchParams.get('v') || '';
        if (p.startsWith('/shorts/')) return p.split('/')[2] || '';
        if (p.startsWith('/embed/'))  return p.split('/')[2] || '';
      }
      return '';
    } catch { return ''; }
  }

  // Use your WS glue directly (avoids scope issues with a generic send())
  function wsSendSyncLoad(videoId){
    const ws   = window.LogFeedWS?.getSocket?.();
    const room = window.LogFeedWS?.getRoom?.();
    const name = window.LogFeedWS?.getName?.() || 'Guest';
    if (!ws || ws.readyState !== 1 || !room) return;
    const msg = {
      type:'sync', room, ts: Date.now(),
      user:{ name }, data:{ action:'load', src:'youtube', videoId, by:{name:name} }
    };
    ws.send(JSON.stringify(msg));
    console.log('[SYNC] OUT load', videoId);
  }

  btn.addEventListener('click', () => {
    const raw = (inp.value || '').trim();
    const id  = extractYouTubeId(raw);
    if (!id) { setStatus('Invalid YouTube link'); return; }

    // 1) Preview locally (everyone can preview their own)
    try {
      window.LogFeedPlayer?.load?.(id, 'youtube');
      setStatus('Previewing…');
      // (Optional) auto play after load; adapter suppresses echo
      //setTimeout(() => window.LogFeedPlayer?.play?.(), 50);
    } catch (e) {
      console.warn('Preview load failed', e);
    }

    // 2) If host, broadcast to room
    if (isHost()) {
      wsSendSyncLoad(id);
      setStatus('Loaded to room');
    } else {
      setStatus('Preview only (host can Load to room)');
    }

    // Persist last video id (nice UX)
    //try { localStorage.setItem('watch:lastVideoId', id); } catch {}
  });

  // Optional: Enter key in the input triggers Load
  inp.addEventListener('keydown', (e)=>{
    if (e.key === 'Enter') { e.preventDefault(); btn.click(); }
  });
})();