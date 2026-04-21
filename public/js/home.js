// public/js/home.js

// ============================================================
// COUNTDOWN TIMER — 04 Juin 2026 08h30
// ============================================================
(function () {
    var target = new Date('2026-06-04T08:30:00').getTime();

    var elJours    = document.getElementById('cd-jours');
    var elHeures   = document.getElementById('cd-heures');
    var elMinutes  = document.getElementById('cd-minutes');
    var elSecondes = document.getElementById('cd-secondes');

    if (!elJours) return;

    function pad(n) { return n < 10 ? '0' + n : '' + n; }

    function tick() {
        var now  = new Date().getTime();
        var diff = target - now;

        if (diff <= 0) {
            elJours.textContent = elHeures.textContent = elMinutes.textContent = elSecondes.textContent = '00';
            return;
        }

        elJours.textContent    = pad(Math.floor(diff / (1000 * 60 * 60 * 24)));
        elHeures.textContent   = pad(Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)));
        elMinutes.textContent  = pad(Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60)));
        elSecondes.textContent = pad(Math.floor((diff % (1000 * 60)) / 1000));
    }

    tick();
    setInterval(tick, 1000);
})();

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
