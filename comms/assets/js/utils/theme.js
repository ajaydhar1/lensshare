/* theme toggle */

(function(){
  const KEY = 'ui.theme';
  const root = document.documentElement;

  // Initial: saved → system → default(dark)
  const saved = localStorage.getItem(KEY);
  if (saved === 'light' || saved === 'dark') {
    root.setAttribute('data-theme', saved);
  } else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches) {
    root.setAttribute('data-theme', 'light');
  } else {
    root.setAttribute('data-theme', 'dark');
  }

  // Keep aria-pressed in sync
  function syncBtn() {
    const btn = document.getElementById('theme-toggle');
    if (!btn) return;
    btn.setAttribute('aria-pressed', root.getAttribute('data-theme') === 'light');
  }
  syncBtn();

  // Listen to system changes (only if user hasn't chosen yet)
  const media = window.matchMedia?.('(prefers-color-scheme: light)');
  if (!saved && media && 'addEventListener' in media) {
    media.addEventListener('change', (e) => {
      root.setAttribute('data-theme', e.matches ? 'light' : 'dark');
      syncBtn();
      window.dispatchEvent(new CustomEvent('themechange', { detail: root.getAttribute('data-theme') }));
    });
  }

  // Theme change handlers
  document.querySelector('.sun')?.addEventListener('click', () => {
    const next = 'light';
    root.setAttribute('data-theme', next);
    localStorage.setItem(KEY, next);
    syncBtn();
    window.dispatchEvent(new CustomEvent('themechange', { detail: next }));
  });

  document.querySelector('.moon')?.addEventListener('click', () => {
    const next = 'dark';
    root.setAttribute('data-theme', next);
    localStorage.setItem(KEY, next);
    syncBtn();
    window.dispatchEvent(new CustomEvent('themechange', { detail: next }));
  });

  // Expose tiny helper if you ever need to force programmatically
  window.setTheme = (mode) => {
    if (!['light','dark'].includes(mode)) return;
    root.setAttribute('data-theme', mode);
    localStorage.setItem(KEY, mode);
    syncBtn();
    window.dispatchEvent(new CustomEvent('themechange', { detail: mode }));
  };
})();