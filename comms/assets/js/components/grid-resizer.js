(function(){
  const SELECT_LAYOUT = 'main.panel'; // we’ll watch any main.panel
  const LAYOUT_ACTIVE = (el) => el.classList.contains('viewer-two-up') || el.classList.contains('viewer-three-up');
  const isMobile = () => matchMedia('(max-width: 900px)').matches;

  // Interactions
  let drag = null; // {startX,left,right}
  let rafId = null;
  let frameX = null;     // last pointer X we saw
  let draggingPanel = null; // panel being dragged in the current session
  let shieldEl = null;   // global shield overlay

  // Bind a single panel (idempotent)
  function bindPanel(panel){
    if(panel.__resizerBound) return;
    if(!LAYOUT_ACTIVE(panel)) return;           // only when 2-up or 3-up
    const style = getComputedStyle(panel);
    if(style.display !== 'grid') return;        // only when grid is active

    // Ensure gutter exists
    let gutter = panel.querySelector('.gutter');
    if(!gutter){
      gutter = document.createElement('div');
      gutter.className = 'gutter';
      gutter.setAttribute('role','separator');
      gutter.setAttribute('tabindex','0');
      gutter.setAttribute('aria-label','Resize columns');
      panel.appendChild(gutter);
    }

    // Ensure CSS vars present
    if(!style.getPropertyValue('--g').trim())    panel.style.setProperty('--g','6px');
    if(!style.getPropertyValue('--min').trim())  panel.style.setProperty('--min','260px');

    const KEY = panel.getAttribute('data-key') || ('res_cols_' + (panel.id || Math.random().toString(36).slice(2)));

    const numVar = (name, fallback)=>{
      const v = parseFloat(getComputedStyle(panel).getPropertyValue(name));
      return Number.isFinite(v) ? v : fallback;
    };
    const GUTTER = () => numVar('--g', 6);
    const MIN    = () => numVar('--min', 260);

    function baseRatio(){ return panel.classList.contains('viewer-three-up') ? 2.95 : 1.35; } // left : 1

    const toPx = (token, fallback)=> token && token.endsWith('px') ? parseFloat(token) : fallback;

    function getWidths(){
      const rect  = panel.getBoundingClientRect();
      const total = rect.width - GUTTER();
      const cols  = getComputedStyle(panel).gridTemplateColumns.split(/\s+/);
      const ratio = baseRatio(), base = ratio + 1;
      const fallbackLeft  = total * (ratio / base);
      const fallbackRight = total * (1 / base);
      return {
        left:  toPx(cols[0]||'', fallbackLeft),
        right: toPx(cols[2]||'', fallbackRight),
        total
      };
    }
    function setWidths(l,r){
      panel.style.setProperty('--left',  Math.max(0, Math.round(l)) + 'px');
      panel.style.setProperty('--right', Math.max(0, Math.round(r)) + 'px');
      // force grid to consume vars even if author CSS had fixed sizes
      panel.style.setProperty('grid-template-columns', 'var(--left) var(--g) var(--right)');
    }
    function save(){ try{
      const {left,right} = getWidths();
      localStorage.setItem(KEY, JSON.stringify([left,right]));
    }catch(e){} }
    function load(){ try{
      const raw = localStorage.getItem(KEY);
      if(!raw) return false;
      const [l,r] = JSON.parse(raw);
      if(Number.isFinite(l) && Number.isFinite(r)){ setWidths(l,r); return true; }
      return false;
    }catch(e){ return false; } }

    function reset(equalSplit = false){
      const rect  = panel.getBoundingClientRect();
      const total = rect.width - (parseFloat(getComputedStyle(panel).getPropertyValue('--g')) || 6);
      let left, right;
      if(equalSplit){
        left = right = total/2;
      }else{
        const ratio = baseRatio(), base = ratio + 1;
        left  = total * (ratio / base);
        right = total * (1     / base);
      }
      // use the same setter you use in tick()/setWidths so grid consumes vars
      panel.style.setProperty('--left',  Math.round(left)  + 'px');
      panel.style.setProperty('--right', Math.round(right) + 'px');
      panel.style.setProperty('grid-template-columns', 'var(--left) var(--g) var(--right)');
      save();
    }

    function ensureShield(){
      if (shieldEl) return;
      shieldEl = document.createElement('div');
      Object.assign(shieldEl.style, {
        position:'fixed', inset:'0', zIndex: 9999,
        background:'transparent', cursor:'col-resize'
      });
      document.body.appendChild(shieldEl);
    }
    function removeShield(){
      if (!shieldEl) return;
      shieldEl.remove(); shieldEl = null;
    }

    // --- Replace these inside bindPanel(panel) so they close over panel + helpers you already have ---
    function startDrag(e){
      if (isMobile()) return;
      const startX = (e.touches ? e.touches[0].clientX : e.clientX);
      const {left, right} = getWidths();
      const min = (parseFloat(getComputedStyle(panel).getPropertyValue('--min')) || 260);
      drag = { startX, left, right, min };
      gutter.classList.add('is-dragging');
      panel.classList.add('is-resizing');
      document.body.style.userSelect = 'none';

      // capture all events over iframes/video and avoid scroll jank
      ensureShield();

      // seed rAF loop
      draggingPanel = panel;
      frameX = startX;
      if (!rafId) rafId = requestAnimationFrame(tick);
    }

    function onMove(e){
      if (!drag) return;
      // just record the latest X; the rAF loop will do the math once per frame
      frameX = (e.touches ? e.touches[0].clientX : e.clientX);
    }

    function endDrag(){
      if (!drag) return;
      drag = null;
      gutter.classList.remove('is-dragging');
      panel.classList.remove('is-resizing');
      document.body.style.userSelect = '';

      // allow iframe interactions again
      removeShield();

      // stop rAF if no other drags in progress
      draggingPanel = null;
      if (rafId){ cancelAnimationFrame(rafId); rafId = null; }

      save();
    }
    function onKey(e){
      if(isMobile()) return;
      const step = 24;
      if(e.key === 'ArrowLeft' || e.key === 'ArrowRight'){
        e.preventDefault();
        const {left,right} = getWidths();
        const min = MIN();
        const delta = (e.key==='ArrowLeft' ? -step : step);
        let l = left + delta, r = right - delta;
        if(l < min){ r -= (min - l); l = min; }
        if(r < min){ l -= (min - r); r = min; }
        setWidths(l,r); save();
      }else if(e.key==='Enter' || e.key===' '){
        e.preventDefault(); reset();
      }
    }

    // listeners
    gutter.addEventListener('mousedown', startDrag);
    gutter.addEventListener('touchstart', startDrag, {passive:true});
    window.addEventListener('mousemove', onMove);
    window.addEventListener('touchmove', onMove, {passive:false});
    window.addEventListener('mouseup', endDrag);
    window.addEventListener('touchend', endDrag);
    gutter.addEventListener('keydown', onKey);
    gutter.addEventListener('dblclick', reset);
    gutter.addEventListener('dblclick', (e)=>{
      // tip: hold Alt/Option while double-clicking to force an equal split
      reset(e.altKey || e.metaKey);
    });


    // first paint: try saved sizes, else current
    if(!load()){
      const {left,right} = getWidths();
      setWidths(left, right);
    }

    panel.__resizerBound = true;
  }

  function tick(){
    if (drag && draggingPanel && frameX != null){
      const min = drag.min;
      const dx  = frameX - drag.startX;
      let l = drag.left + dx;
      let r = drag.right - dx;

      if (l < min){ r -= (min - l); l = min; }
      if (r < min){ l -= (min - r); r = min; }

      // one write per frame = smooth
      draggingPanel.style.setProperty('--left',  Math.round(l) + 'px');
      draggingPanel.style.setProperty('--right', Math.round(r) + 'px');
      draggingPanel.style.setProperty('grid-template-columns', 'var(--left) var(--g) var(--right)');
    }
    rafId = requestAnimationFrame(tick);
  }


  // Scan & bind any active panels
  function scan(){
    document.querySelectorAll(SELECT_LAYOUT).forEach(bindPanel);
  }

  // Observe: new nodes added and class changes on main.panel
  const obs = new MutationObserver((muts)=>{
    for(const m of muts){
      if(m.type === 'childList'){
        m.addedNodes.forEach(node=>{
          if(!(node instanceof Element)) return;
          if(node.matches && node.matches(SELECT_LAYOUT)) bindPanel(node);
          node.querySelectorAll?.(SELECT_LAYOUT).forEach(bindPanel);
        });
      }else if(m.type === 'attributes' && m.target.matches(SELECT_LAYOUT)){
        bindPanel(m.target);
      }
    }
  });

  // Start when DOM is ready
  if(document.readyState === 'loading'){
    document.addEventListener('DOMContentLoaded', () => {
      scan();
      obs.observe(document.body, { childList:true, subtree:true, attributes:true, attributeFilter:['class'] });
    }, {once:true});
  }else{
    scan();
    obs.observe(document.body, { childList:true, subtree:true, attributes:true, attributeFilter:['class'] });
  }
})();