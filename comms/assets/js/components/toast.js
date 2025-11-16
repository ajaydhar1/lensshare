/* JS queue for toasts */

const stack = document.getElementById('toast-stack');
let toastQueue = [], showing = 0;

function showToast({
  text, kind='info', timeout=4000,
  onClick, closeOnClick=false,
  place='top'
}){
  toastQueue.push({text, kind, timeout, onClick, closeOnClick, place});
  pump();
}

function ensureStackPlace(place){
  if (!stack) return;
  // toggle top vs bottom without duplicating nodes
  if (place === 'bottom') {
    stack.style.inset = 'auto 12px 12px 50%';
  } else {
    stack.style.inset = '72px auto auto 50%'; // match CSS default
  }
}

function pump(){
  if (showing >= 3 || !toastQueue.length) return;
  const t = toastQueue.shift(); showing++;
  ensureStackPlace(t.place);

  const el = document.createElement('div');
  el.className = `toast ${t.kind} attn ${t.onClick ? 'clickable' : ''}`;
  el.setAttribute('role','status');
  el.setAttribute('aria-live','polite');

  el.innerHTML = `
    <div class="icon" aria-hidden="true">💬</div>
    <div class="body" role="${t.onClick ? 'button':'text'}" tabindex="${t.onClick ? '0':'-1'}">
      ${t.text}
    </div>
    <button class="close" aria-label="Close">✕</button>
  `;

  const bodyEl  = el.querySelector('.body');
  const closeEl = el.querySelector('.close');

  const dismiss = () => {
    el.classList.remove('show');
    setTimeout(()=>{ el.remove(); showing--; pump(); }, 160);
  };

  // Close button (don’t let it bubble)
  closeEl.addEventListener('click', (e)=>{ e.stopPropagation(); dismiss(); });

  // Primary click target: the body
  if (typeof t.onClick === 'function') {
    const fire = (e) => {
      // Prevent anchors inside the body stealing navigation
      if (e.target.closest('a')) e.preventDefault();
      if (t.closeOnClick) dismiss();
      try { t.onClick(); } catch (err) { console.error('Toast onClick error:', err); }
    };
    bodyEl.addEventListener('click', fire);
    // keyboard accessibility
    bodyEl.addEventListener('keydown', (e)=> {
      if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); fire(e); }
    });
  }

  stack.appendChild(el);
  requestAnimationFrame(()=> el.classList.add('show'));
  if (t.timeout > 0) setTimeout(dismiss, t.timeout);
}

window.Toaster = { showToast };