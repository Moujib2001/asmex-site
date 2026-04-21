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

    burger.addEventListener('click', function () {
        var isOpen = navLinks.classList.toggle('open');
        burger.classList.toggle('open', isOpen);
        document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    navLinks.querySelectorAll('.nav-link').forEach(function (link) {
        link.addEventListener('click', function () {
            navLinks.classList.remove('open');
            burger.classList.remove('open');
            document.body.style.overflow = '';
        });
    });
})();
