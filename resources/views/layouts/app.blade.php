{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="L'Export Digital à l'Ère de l'Intelligence Artificielle – ASMEX, 04 Juin 2026, Four Seasons Hotel Casablanca">
    <meta name="theme-color" content="#1B2B6B">

    <title>@yield('title', 'ASMEX – Export Digital & IA 2026')</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

    {{-- CSS Global --}}
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">

    {{-- CSS par page --}}
    @stack('styles')
</head>
<body>

    {{-- NAVBAR --}}
    <nav id="navbar">
        <div class="navbar-inner">
            <a href="{{ route('home') }}" class="navbar-logo">
                <span class="navbar-logo-text">
                    ASMEX
                    <span class="navbar-logo-sub">Export Digital & IA 2026</span>
                </span>
            </a>

            <ul id="navLinks">
                <li><a href="{{ route('home') }}"
                       class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                    Accueil
                </a></li>
                <li><a href="{{ route('programme') }}"
                       class="nav-link {{ request()->routeIs('programme') ? 'active' : '' }}">
                    Programme
                </a></li>
                <li><a href="{{ route('intervenants') }}"
                       class="nav-link {{ request()->routeIs('intervenants') ? 'active' : '' }}">
                    Intervenants
                </a></li>
                <li><a href="{{ route('sponsoring') }}"
                       class="nav-link {{ request()->routeIs('sponsoring') ? 'active' : '' }}">
                    Sponsoring
                </a></li>
                <li><a href="{{ route('contact') }}"
                       class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                    Contact
                </a></li>
                <li><a href="{{ route('inscription') }}" class="nav-link nav-cta">
                    S'inscrire
                </a></li>
            </ul>

            <button class="navbar-burger" id="navBurger" aria-label="Menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    {{-- CONTENU PRINCIPAL --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer id="footer">
        <div class="container">
            <div class="footer-grid">

                {{-- Colonne Brand --}}
                <div>
                    <div class="navbar-logo-text" style="font-family:'Syne',sans-serif;font-weight:800;font-size:1.4rem;color:#fff;margin-bottom:12px;">
                        ASMEX
                    </div>
                    <p class="footer-brand-desc">
                        Confédération Marocaine des Exportateurs.<br>
                        Événement : L'Export Digital à l'Ère de l'IA — 04 Juin 2026, Casablanca.
                    </p>
                </div>

                {{-- Navigation --}}
                <div>
                    <p class="footer-col-title">Navigation</p>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li><a href="{{ route('programme') }}">Programme</a></li>
                        <li><a href="{{ route('intervenants') }}">Intervenants</a></li>
                        <li><a href="{{ route('sponsoring') }}">Sponsoring</a></li>
                        <li><a href="{{ route('inscription') }}">Inscription</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>

                {{-- Informations événement --}}
                <div>
                    <p class="footer-col-title">Événement</p>
                    <div class="footer-event-info">
                        <div class="footer-info-item">
                            <span class="footer-info-icon">📅</span>
                            <span>04 Juin 2026</span>
                        </div>
                        <div class="footer-info-item">
                            <span class="footer-info-icon">⏰</span>
                            <span>08h30 – 17h00</span>
                        </div>
                        <div class="footer-info-item">
                            <span class="footer-info-icon">📍</span>
                            <span>Four Seasons Hotel<br>Casablanca</span>
                        </div>
                        <div class="footer-info-item">
                            <span class="footer-info-icon">👥</span>
                            <span>200–300 participants</span>
                        </div>
                    </div>
                </div>

                {{-- Contact --}}
                <div>
                    <p class="footer-col-title">Contact</p>
                    <div class="footer-contact">
                        <p class="footer-contact-name">Mme Hind LAHSINIA</p>
                        <p class="footer-contact-role">Responsable Événement — ASMEX</p>
                        <a href="tel:+212661324503" class="footer-contact-link">
                            <span>📞</span> +212 6 61 32 45 03
                        </a>
                        <a href="mailto:h.lahsinia@asmex.org" class="footer-contact-link">
                            <span>✉️</span> h.lahsinia@asmex.org
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-inner">
                    <span>&copy; 2026 ASMEX – Confédération Marocaine des Exportateurs. Tous droits réservés.</span>
                    <span class="footer-partners">Partenaires : ASMEX · PORTNET · APEBI</span>
                </div>
            </div>
        </div>
    </footer>

    {{-- JS Global --}}
    <script src="{{ asset('js/global.js') }}" defer></script>

    {{-- JS par page --}}
    @stack('scripts')

</body>
</html>
