/*
 * LensShare universal top navigation behavior.
 * Self-contained (no Bootstrap/jQuery). Scoped to [data-ls-nav].
 */
(function () {
  'use strict';

  var nav = document.querySelector('[data-ls-nav]');
  if (!nav) return;

  var toggle = nav.querySelector('.ls-nav__toggle');
  var menu = nav.querySelector('.ls-nav__menu');
  var menus = Array.prototype.slice.call(nav.querySelectorAll('[data-ls-menu]'));
  var desktop = window.matchMedia('(min-width: 1024px)');

  /* ---------- Mobile menu ---------- */
  function setMobileOpen(open) {
    nav.classList.toggle('is-open', open);
    toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
  }

  toggle.addEventListener('click', function () {
    setMobileOpen(!nav.classList.contains('is-open'));
  });

  /* ---------- Portals disclosure menu ---------- */
  function trigger(item) { return item.querySelector('.ls-nav__trigger'); }

  function setMenuOpen(item, open) {
    item.classList.toggle('is-open', open);
    trigger(item).setAttribute('aria-expanded', open ? 'true' : 'false');
  }

  function closeMenus(except) {
    menus.forEach(function (item) {
      if (item !== except) setMenuOpen(item, false);
    });
  }

  function items(item) {
    return Array.prototype.slice.call(item.querySelectorAll('.ls-nav__portal'));
  }

  menus.forEach(function (item) {
    var btn = trigger(item);

    btn.addEventListener('click', function () {
      var open = !item.classList.contains('is-open');
      closeMenus(item);
      setMenuOpen(item, open);
    });

    btn.addEventListener('keydown', function (e) {
      if (e.key === 'ArrowDown') {
        e.preventDefault();
        closeMenus(item);
        setMenuOpen(item, true);
        var list = items(item);
        if (list.length) list[0].focus();
      }
    });

    item.addEventListener('keydown', function (e) {
      var list = items(item);
      var i = list.indexOf(document.activeElement);

      if (e.key === 'Escape' && item.classList.contains('is-open')) {
        e.preventDefault();
        setMenuOpen(item, false);
        btn.focus();
      } else if (i > -1 && (e.key === 'ArrowDown' || e.key === 'ArrowUp')) {
        e.preventDefault();
        var next = e.key === 'ArrowDown' ? i + 1 : i - 1;
        if (next < 0) { btn.focus(); }
        else { list[Math.min(next, list.length - 1)].focus(); }
      } else if (i > -1 && (e.key === 'Home' || e.key === 'End')) {
        e.preventDefault();
        list[e.key === 'Home' ? 0 : list.length - 1].focus();
      }
    });

    // Close when focus leaves the menu (Tab / Shift+Tab away).
    item.addEventListener('focusout', function (e) {
      if (e.relatedTarget && !item.contains(e.relatedTarget)) setMenuOpen(item, false);
    });
  });

  document.addEventListener('click', function (e) {
    if (!nav.contains(e.target)) {
      closeMenus();
      if (!desktop.matches) setMobileOpen(false);
    }
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && nav.classList.contains('is-open') && !desktop.matches) {
      setMobileOpen(false);
      toggle.focus();
    }
  });

  // Choosing a link closes any open menu (important for same-page anchors).
  menu.addEventListener('click', function (e) {
    if (e.target.closest('a')) {
      closeMenus();
      setMobileOpen(false);
    }
  });

  function onBreakpoint() {
    closeMenus();
    setMobileOpen(false);
  }
  if (desktop.addEventListener) desktop.addEventListener('change', onBreakpoint);
  else if (desktop.addListener) desktop.addListener(onBreakpoint);

  /* ---------- Scroll state + section highlighting ---------- */
  var spyLinks = Array.prototype.slice.call(nav.querySelectorAll('[data-ls-spy]'));
  var sections = [];
  spyLinks.forEach(function (link) {
    var el = document.getElementById(link.getAttribute('data-ls-spy'));
    if (el) sections.push({ link: link, el: el });
  });

  var ticking = false;
  function update() {
    ticking = false;
    nav.classList.toggle('is-scrolled', window.scrollY > 4);

    if (!sections.length) return;
    var line = nav.offsetHeight + window.innerHeight * 0.3;
    var current = null;
    sections.forEach(function (s) {
      var r = s.el.getBoundingClientRect();
      if (r.top <= line && r.bottom > line) current = s.link;
    });
    sections.forEach(function (s) {
      var on = s.link === current;
      s.link.classList.toggle('is-current', on);
      if (on) s.link.setAttribute('aria-current', 'location');
      else if (s.link.getAttribute('aria-current') === 'location') s.link.removeAttribute('aria-current');
    });
  }

  function requestUpdate() {
    if (!ticking) {
      ticking = true;
      window.requestAnimationFrame(update);
    }
  }

  window.addEventListener('scroll', requestUpdate, { passive: true });
  window.addEventListener('resize', requestUpdate);
  update();

  nav.setAttribute('data-ls-ready', '');
})();
