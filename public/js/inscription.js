// public/js/inscription.js

// ============================================================
// TYPE PILLS — FEEDBACK VISUEL SMOOTH
// ============================================================
(function () {
  var pills = document.querySelectorAll('.type-pills input[type="radio"]');
  if (!pills.length) return;

  pills.forEach(function (radio) {
    radio.addEventListener('change', function () {
      // Le CSS :checked gère déjà l'état visuel
      // On ajoute une légère animation de confirmation
      var label = document.querySelector('label[for="' + radio.id + '"]');
      if (label) {
        label.style.transform = 'scale(0.95)';
        setTimeout(function () {
          label.style.transform = '';
        }, 150);
      }
    });
  });
})();

// ============================================================
// VALIDATION FEEDBACK EN TEMPS RÉEL
// ============================================================
(function () {
  var form = document.getElementById('inscriptionForm');
  if (!form) return;

  var required = form.querySelectorAll('[required]');

  required.forEach(function (field) {
    field.addEventListener('blur', function () {
      validateField(field);
    });

    field.addEventListener('input', function () {
      if (field.classList.contains('is-invalid')) {
        validateField(field);
      }
    });
  });

  function validateField(field) {
    var feedback = field.parentNode.querySelector('.invalid-feedback');
    if (!feedback) return;

    var valid = true;

    if (field.type === 'email') {
      valid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(field.value.trim());
    } else if (field.type === 'checkbox') {
      valid = field.checked;
    } else {
      valid = field.value.trim().length > 0;
    }

    if (!valid) {
      field.classList.add('is-invalid');
      feedback.style.display = 'block';
    } else {
      field.classList.remove('is-invalid');
      feedback.style.display = 'none';
    }
  }
})();
