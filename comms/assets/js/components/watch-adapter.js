/* === YouTube IFrame adapter for LogFeedPlayer ===
   Requirements:
   - A container element to host the player (e.g., <div id="yt-mount" class="yt-mount"></div>)
   - Your existing window.LogFeedPlayer object from earlier
*/
(function(){
  const mount = document.getElementById('yt-mount') || document.getElementById('yt-player') || document.querySelector('.yt-mount');
  if (!mount) { console.warn('[YT] no mount found'); return; }

  // Load the IFrame API if needed
  function loadYT(cb){
    if (window.YT && window.YT.Player) return cb();
    const tag = document.createElement('script');
    tag.src = 'https://www.youtube.com/iframe_api';
    document.head.appendChild(tag);
    const prev = window.onYouTubeIframeAPIReady;
    window.onYouTubeIframeAPIReady = function(){
      if (typeof prev === 'function') try { prev(); } catch {}
      cb();
    };
  }

  let ytPlayer = null;
  let suppressLocalEmitUntil = 0;
  function suppress(ms=300){ suppressLocalEmitUntil = Date.now()+ms; }
  function shouldEmit(){ return Date.now() > suppressLocalEmitUntil; }

  // simple jump detector for user seeks
  let lastTime = 0;
  let timePoll;
  function startTimePoll(){
    clearInterval(timePoll);
    timePoll = setInterval(()=>{
      if (!ytPlayer || !window.LogFeedPlayer) return;
      const t = ytPlayer.getCurrentTime?.() || 0;
      // detect user seek: large jump while playing or paused
      if (shouldEmit() && Math.abs(t - lastTime) > 0.8) {
        window.LogFeedPlayer.emit('seek', t);
      }
      lastTime = t;
    }, 500);
  }

  loadYT(() => {
    // Try to seed an initial video (optional)
    const initialVideoId =
      (mount?.dataset?.videoid || '').trim() ||           // <div id="yt-mount" data-videoid="abc123">
      (window.INIT_VIDEO_ID || '').trim() ||              // set from server/URL if you want
      (localStorage.getItem('watch:lastVideoId') || '').trim() || 
      '';

    const cfg = {
      width: '100%',
      height: '100%',
      // IMPORTANT: do NOT set videoId if empty/null
      playerVars: { rel: 0, modestbranding: 1, playsinline: 1 },
      events: {
        onReady: () => {
          const api = window.LogFeedPlayer;
          if (!api) return;

          // Wire wrapper methods to real player
          api.paused = () => {
            const st = ytPlayer.getPlayerState?.();
            return st !== YT.PlayerState.PLAYING;
          };
          api.currentTime = () => ytPlayer.getCurrentTime?.() || 0;
          api.play = () => { suppress(); ytPlayer.playVideo?.(); };
          api.pause = () => { suppress(); ytPlayer.pauseVideo?.(); };
          api.seek = (t) => { suppress(); ytPlayer.seekTo?.(Math.max(0, t || 0), true); };
          api.isMuted = () => !!ytPlayer?.isMuted?.();
          api.mute    = () => { try { ytPlayer?.mute?.(); } catch {} };
          api.unmute  = () => { try { ytPlayer?.unMute?.(); } catch {} };
          api.load = (videoId, src = 'youtube') => {
            if (src !== 'youtube' || !videoId) return;
            suppress(600);
            // Preview locally
            ytPlayer.cueVideoById?.(videoId);
            //try { localStorage.setItem('watch:lastVideoId', videoId); } catch {}
          };

          // Bind WS sync handlers AFTER adapter ready
          if (typeof window.attachPlayerSync === 'function') {
            window.attachPlayerSync();
            console.log('[SYNC] attachPlayerSync() wired');
          }

          // If we had no initial video, the player is blank until you preview/load
          // If we had one, ensure time polling + emits work the same
          startTimePoll();
          console.log('[YT] ready', initialVideoId ? `(seed: ${initialVideoId})` : '(no seed)');
        },
        onStateChange: (ev) => {
          if (!window.LogFeedPlayer || !shouldEmit()) return;
          const api = window.LogFeedPlayer;
          if (ev.data === YT.PlayerState.PLAYING) {
            api.emit('play');
          } else if (ev.data === YT.PlayerState.PAUSED) {
            api.emit('pause');
          }
        }
      }
    };

    // Only set videoId if we actually have one
    if (initialVideoId) cfg.videoId = initialVideoId;

    // Create the player (you can pass the element or its id)
    ytPlayer = new YT.Player(mount, cfg);
  });

})();
