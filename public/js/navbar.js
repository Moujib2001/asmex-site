// public/js/navbar.js

// Navbar scroll
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

// Burger menu
(function () {
    var burger   = document.getElementById('navBurger');
    var navLinks = document.getElementById('navLinks');
    if (!burger || !navLinks) return;

    function closeMenu() {
        navLinks.classList.remove('open');
        burger.classList.remove('open');
        burger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
    }

    burger.addEventListener('click', function () {
        var isOpen = navLinks.classList.toggle('open');
        burger.classList.toggle('open', isOpen);
        burger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    navLinks.querySelectorAll('.nav-link').forEach(function (link) {
        link.addEventListener('click', closeMenu);
    });

    // Fermer si on clique dehors
    document.addEventListener('click', function (e) {
        if (!burger.contains(e.target) && !navLinks.contains(e.target)) {
            closeMenu();
        }
    });
})();
