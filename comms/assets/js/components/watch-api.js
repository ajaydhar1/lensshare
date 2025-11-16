/* Expose a tiny API so sync code is backend-agnostic */

// window.LogFeedPlayer
const LogFeedPlayer = (function(){
  const api = {
    _events: {},
    on(evt, fn){ (this._events[evt] ||= []).push(fn); },
    emit(evt, payload){ (this._events[evt]||[]).forEach(f=>f(payload)); },

    /* playback API: defaults are safe no-ops; the adapter overwrites these */
    paused(){ return true; },
    currentTime(){ return 0; },
    play(){ this.emit('play'); },
    pause(){ this.emit('pause'); },
    seek(t){ this.emit('seek', t||0); },
    load(videoId, src){ this.emit('load', { videoId, src }); },

    /* NEW: local audio control for “Close -> mute” flow */
    isMuted(){ return false; },
    mute(){ /* adapter overwrites */ },
    unmute(){ /* adapter overwrites */ }
  };
  return api;
})();
window.LogFeedPlayer = LogFeedPlayer;