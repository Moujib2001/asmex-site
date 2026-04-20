// public/js/global.js

// ============================================================
// 1. NAVBAR SCROLL
// ============================================================
(function () {
  var navbar = document.getElementById('navbar');
  if (!navbar) return;

  function onScroll() {
    if (window.scrollY > 40) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
})();

// ============================================================
// 2. BURGER MENU
// ============================================================
(function () {
  var burger   = document.getElementById('navBurger');
  var navLinks = document.getElementById('navLinks');
  if (!burger || !navLinks) return;

  burger.addEventListener('click', function () {
    var isOpen = navLinks.classList.toggle('open');
    burger.classList.toggle('open', isOpen);
    document.body.style.overflow = isOpen ? 'hidden' : '';
  });

  // Fermer le menu au clic sur un lien
  navLinks.querySelectorAll('.nav-link').forEach(function (link) {
    link.addEventListener('click', function () {
      navLinks.classList.remove('open');
      burger.classList.remove('open');
      document.body.style.overflow = '';
    });
  });
})();

// ============================================================
// 3. SCROLL REVEAL (IntersectionObserver)
// ============================================================
(function () {
  var elements = document.querySelectorAll('.reveal');
  if (!elements.length) return;

  if (!('IntersectionObserver' in window)) {
    elements.forEach(function (el) { el.classList.add('visible'); });
    return;
  }

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  elements.forEach(function (el) { observer.observe(el); });
})();
