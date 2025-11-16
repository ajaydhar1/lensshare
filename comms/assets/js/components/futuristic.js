/* futuristic mode */

(function(){
  const btn = document.getElementById('btn-futuristic');
  const root = document.getElementById('future-root');
  const exitBtn = document.getElementById('future-exit');

  const watch = document.getElementById('watch-panel');
  const jitsi = document.getElementById('video-panel');
  const chat  = document.getElementById('chat-block');

  const pre = document.getElementById('log');

  // placeholders to restore original location
  const phWatch = document.createElement('span'); phWatch.hidden = true;
  const phChat  = document.createElement('span'); phChat.hidden = true;

  // overlay wrappers
  const watchOverlay = document.createElement('div'); watchOverlay.id = 'watch-overlay'; watchOverlay.className='future-overlay';
  const chatOverlay  = document.createElement('div'); chatOverlay.id  = 'chat-overlay';  chatOverlay.className='future-overlay';

  function allThreeOpen(){
    const wOpen = watch && !watch.classList.contains('hidden');
    const vOpen = jitsi && !jitsi.classList.contains('hidden');
    const cOpen = chat  && !chat.classList.contains('hidden');
    return wOpen && vOpen && cOpen;
  }

  function openAllThree() {
    if (document.getElementById('watch-panel').getAttribute('aria-hidden') !== "false") {
      document.getElementById('btn-watch-toggle').click();
    }
    if (document.getElementById('video-panel').getAttribute('aria-hidden') !== "false") {
      document.getElementById('btn-video-toggle').click();
    }
  }

  function updateButton(){
    if (btn) btn.style.display = allThreeOpen() ? '' : 'none';
  }

  // Call this after you open/close any panel too
  window.updateFuturisticButton = updateButton;
  //updateButton();

  function enterFuturistic(){
    //if (!allThreeOpen()) return;
    openAllThree();
    document.body.classList.add('futuristic');

    // show overlay root
    root.hidden = false;
    root.setAttribute('aria-hidden', 'false');

    // Run when Futuristic mode turns on
    (function ensureExitOnTop(){
      const btn = document.getElementById('future-exit');
      if (!btn) return;
      document.body.appendChild(btn); // move out of any transformed parent
    })();

    document.getElementById('future-exit').style.display = 'block';

    // move panels into overlays (portal)
    watch.before(phWatch);
    watchOverlay.innerHTML = '';
    watchOverlay.appendChild(watch);
    root.appendChild(watchOverlay);

    chat.before(phChat);
    chatOverlay.innerHTML = '';
    chatOverlay.appendChild(chat);
    root.appendChild(chatOverlay);

    pre.scrollTop = pre.scrollHeight;

    // ensure Jitsi is the full-screen background layer
    // (#video-panel CSS handles positioning in .futuristic)
  }

  function exitFuturistic(){

    console.log("Exit futuristic button clicked");

    document.body.classList.remove('futuristic');

    // restore panels to original positions
    if (phWatch.parentNode) phWatch.replaceWith(watch);
    if (phChat.parentNode)  phChat.replaceWith(chat);

    // hide overlay root
    root.setAttribute('aria-hidden','true');
    root.hidden = true;

    document.getElementById('future-exit').style.display = 'none';

  }

  btn?.addEventListener('click', enterFuturistic);
  exitBtn?.addEventListener('click', exitFuturistic);
  document.addEventListener('keydown', (e)=>{
    if (e.key === 'Escape' && document.body.classList.contains('futuristic')) {
      e.preventDefault(); exitFuturistic();
    }
  });

  // If your open/close Watch/Jitsi/Chat code exists, call updateFuturisticButton()
  // at the end of those handlers so the ✨ button only shows when all three are visible.
})();