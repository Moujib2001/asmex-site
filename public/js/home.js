// public/js/home.js

// ============================================================
// COUNTER ANIMÉ
// ============================================================
(function () {
  var section = document.querySelector('.section-chiffres');
  if (!section) return;

  if (!('IntersectionObserver' in window)) {
    document.querySelectorAll('.counter').forEach(function (el) {
      el.textContent = el.getAttribute('data-target');
    });
    return;
  }

  var started = false;

  function animateCounter(el) {
    var target   = parseInt(el.getAttribute('data-target'), 10);
    var duration = 1800;
    var start    = null;

    function easeOutQuart(t) {
      return 1 - Math.pow(1 - t, 4);
    }

    function step(timestamp) {
      if (!start) start = timestamp;
      var elapsed  = timestamp - start;
      var progress = Math.min(elapsed / duration, 1);
      var value    = Math.round(easeOutQuart(progress) * target);
      el.textContent = value;
      if (progress < 1) {
        requestAnimationFrame(step);
      } else {
        el.textContent = target;
      }
    }

    requestAnimationFrame(step);
  }

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting && !started) {
        started = true;
        document.querySelectorAll('.counter').forEach(animateCounter);
        observer.unobserve(section);
      }
    });
  }, { threshold: 0.3 });

  observer.observe(section);
})();
