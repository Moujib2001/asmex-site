{{-- resources/views/partials/navbar.blade.php --}}
<nav id="navbar">
    <div class="navbar-inner">
        <a href="{{ route('home') }}" class="navbar-logo">
            <img src="{{ asset('imges/logo/Logo_Asmex_blanc.png') }}" alt="ASMEX" class="navbar-logo-img">
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
