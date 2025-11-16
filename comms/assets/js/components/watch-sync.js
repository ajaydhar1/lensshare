/**
 * Socket sync of watch together
 */

// --- helper that always uses your WS glue
function wsSendSync(data){
  const ws   = window.LogFeedWS?.getSocket?.();
  const room = window.LogFeedWS?.getRoom?.();
  const name = window.LogFeedWS?.getName?.() || 'Guest';
  if (!ws || ws.readyState !== 1 || !room) return;
  ws.send(JSON.stringify({ type:'sync', room, ts: Date.now(), user:{name}, data }));
}

// Optional: only the “host” emits control
function isHost(){ return !!document.getElementById('watch-host')?.checked; }

// Optional debug
function sLog(...a){ if (window.DEBUG_SYNC) console.log('[SYNC]', ...a); }

let player = window.LogFeedPlayer;
let lastSeekOut = 0;

function syncPlay(){
  if (!isHost()) return;
  sLog('OUT play', player?.currentTime?.());
  wsSendSync({ action:'play',  t: player.currentTime() });
}
function syncPause(){
  if (!isHost()) return;
  sLog('OUT pause', player?.currentTime?.());
  wsSendSync({ action:'pause', t: player.currentTime() });
}
function syncSeek(t){
  if (!isHost()) return;
  const now = Date.now();
  if (now - lastSeekOut < 250) return; // throttle
  lastSeekOut = now;
  sLog('OUT seek', t);
  wsSendSync({ action:'seek', t });
}
function syncLoad(videoId, src){
  if (!isHost()) return;
  sLog('OUT load', videoId, src);
  wsSendSync({ action:'load', videoId, src }); // others will cue; no autoplay
}

/* Bind once when adapter is ready */
window.attachPlayerSync = function(){
  if (!player || !player.on) return console.warn('[SYNC] player not ready');
  if (player._syncBound) return;
  player._syncBound = true;

  player.on('play',  () => syncPlay());
  player.on('pause', () => syncPause());
  player.on('seek',  (t) => syncSeek(t));
  player.on('load',  ({videoId, src}) => syncLoad(videoId, src));

  sLog('handlers bound');
};

/* Receiver stays as you had it; keep this tweak for “load” (no autoplay) */
function applySync(data, serverTs){
  if (!player) return;
  const latency = Math.max(0, (Date.now() - (serverTs||Date.now()))/1000);

  if (data.action==='load'){
    sLog('IN load', data.videoId, data.src);
    player.load(data.videoId, data.src);             // adapter uses cueVideoById
    document.getElementById('yt-player').style.display = 'block';
        // 2) publish paused state so viewers load too
    setTimeout(()=>{ if (!player.paused()) player.pause(); }, 60);
    return;
  }
  if (data.action==='play'){
    const target = (data.t||0) + latency;
    if (Math.abs(player.currentTime()-target) > 0.3) player.seek(target);
    if (player.paused()) player.play();
    return;
  }
  if (data.action==='pause'){
    const target = (data.t||0);
    if (!player.paused()) player.pause();
    if (Math.abs(player.currentTime()-target) > 0.3) player.seek(target);
    return;
  }
  if (data.action==='seek'){
    player.seek(data.t||0);
    return;
  }
  if (data.action === 'clear') {
    // cue “nothing”: destroy/cue blank depending on your adapter
    try { player.pause(); } catch {}
    // optional: empty the player area:
    document.getElementById('yt-player').style.display = 'none';
    // or cue a blank video/state:
    // (your adapter can expose a clear/unload helper if you prefer)
    return;
  }
}