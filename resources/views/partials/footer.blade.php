{{-- resources/views/partials/footer.blade.php --}}
<footer id="footer">
    <div class="container">
        <div class="footer-grid">

            <div>
                <img src="{{ asset('imges/logo/Logo_Asmex_blanc.png') }}" alt="ASMEX" class="footer-logo-img">
                <p class="footer-brand-desc">
                    Confédération Marocaine des Exportateurs.<br>
                    Événement : L'Export Digital à l'Ère de l'IA — 04 Juin 2026, Casablanca.
                </p>
            </div>

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

            <div>
                <p class="footer-col-title">Événement</p>
                <div class="footer-event-info">
                    <div class="footer-info-item">
                        <img src="{{ asset('imges/icon/calendar-clock.png') }}" alt="Date" class="footer-info-icon">
                        <span>04 Juin 2026</span>
                    </div>
                    <div class="footer-info-item">
                        <img src="{{ asset('imges/icon/clock.png') }}" alt="Horaires" class="footer-info-icon">
                        <span>08h30 – 17h00</span>
                    </div>
                    <div class="footer-info-item">
                        <img src="{{ asset('imges/icon/marker.png') }}" alt="Lieu" class="footer-info-icon">
                        <span>Four Seasons Hotel<br>Casablanca</span>
                    </div>
                    <div class="footer-info-item">
                        <img src="{{ asset('imges/icon/group.png') }}" alt="Participants" class="footer-info-icon">
                        <span>200–300 participants</span>
                    </div>
                </div>
            </div>

            <div>
                <p class="footer-col-title">Contact</p>
                <div class="footer-contact">
                    <p class="footer-contact-name">Mme Hind LAHSINIA</p>
                    <p class="footer-contact-role">Responsable Événement — ASMEX</p>
                    <a href="tel:+212661324503" class="footer-contact-link">
                        <img src="{{ asset('imges/icon/telephone.png') }}" alt="Téléphone" class="footer-info-icon"> +212 6 61 32 45 03
                    </a>
                    <a href="mailto:h.lahsinia@asmex.org" class="footer-contact-link">
                        <img src="{{ asset('imges/icon/email.png') }}" alt="Email" class="footer-info-icon"> h.lahsinia@asmex.org
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
