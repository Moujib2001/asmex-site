// public/js/intervenants.js

// ============================================================
// FILTER PAR PANEL
// ============================================================
(function () {
  var filterTags = document.querySelectorAll('.filter-tag');
  var cards      = document.querySelectorAll('.speaker-card');

  if (!filterTags.length || !cards.length) return;

  filterTags.forEach(function (tag) {
    tag.addEventListener('click', function () {
      // Mettre à jour l'état actif
      filterTags.forEach(function (t) { t.classList.remove('active'); });
      tag.classList.add('active');

      var selectedPanel = tag.getAttribute('data-filter');

      cards.forEach(function (card) {
        var cardPanel = card.getAttribute('data-panel');
        if (selectedPanel === 'all' || cardPanel === selectedPanel) {
          card.classList.remove('hidden');
        } else {
          card.classList.add('hidden');
        }
      });
    });
  });
})();
