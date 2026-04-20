// public/js/programme.js

// ============================================================
// TIMELINE ANIMATION (IntersectionObserver)
// ============================================================
(function () {
  var items = document.querySelectorAll('.timeline-item');
  if (!items.length) return;

  if (!('IntersectionObserver' in window)) {
    items.forEach(function (item) { item.classList.add('visible'); });
    return;
  }

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });

  items.forEach(function (item) { observer.observe(item); });
})();
