{{-- resources/views/inscription.blade.php --}}
@extends('layouts.app')

@section('title', 'Inscription – ASMEX Export à l\'Ère du Digital & IA 2026')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/inscription.css') }}">
@endpush

@section('content')

    {{-- PAGE HERO --}}
    <section class="page-hero">
        <div class="page-hero-grid-bg"></div>
        <div class="container page-hero-inner">
            <span class="section-label">Places limitées</span>
            <h1 class="page-hero-title">Inscription à l'Événement</h1>
            <p class="page-hero-subtitle">
                Réservez votre place pour la journée du 04 Juin 2026 au Four Seasons Hotel Casablanca.
            </p>
        </div>
    </section>

    {{-- SECTION INSCRIPTION --}}
    <section class="section-inscription">
        <div class="container">
            <div class="inscription-layout">

                {{-- FORMULAIRE --}}
                <div class="form-card">
                    <h2 class="form-card-title">Formulaire d'inscription</h2>
                    <p class="form-card-subtitle">
                        Remplissez ce formulaire. Un email de confirmation vous sera envoyé immédiatement.
                    </p>

                    @if(session('success'))
                        <div class="alert-success">
                            <span class="alert-success-icon">✅</span>
                            <div class="alert-success-text">{{ session('success') }}</div>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert-error">
                            <span style="font-size:1.3rem;flex-shrink:0;">⚠️</span>
                            <div class="alert-error-text">
                                Veuillez corriger les erreurs ci-dessous avant de soumettre le formulaire.
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('inscription.store') }}" method="POST" id="inscriptionForm" novalidate>
                        @csrf

                        {{-- Type de participation --}}
                        <div class="form-group" style="margin-bottom:28px;">
                            <label>Type de participation <span style="color:var(--rouge)">*</span></label>
                            <div class="type-pills">
                                @foreach(['Participant', 'Sponsor', 'Presse', 'Intervenant'] as $type)
                                    <input
                                        type="radio"
                                        name="type"
                                        id="type_{{ $type }}"
                                        value="{{ $type }}"
                                        {{ old('type', request('type', 'Participant')) === $type ? 'checked' : '' }}
                                    >
                                    <label for="type_{{ $type }}">{{ $type }}</label>
                                @endforeach
                            </div>
                            @error('type')
                                <span class="invalid-feedback" style="display:block;">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Package Sponsor (visible uniquement si type = Sponsor) --}}
                        <div class="form-group form-group-sponsor" id="sponsor-package-group" style="margin-bottom:28px;display:none;">
                            <label for="package">Package de sponsoring <span style="color:var(--rouge)">*</span></label>
                            <select
                                id="package"
                                name="package"
                                class="form-control {{ $errors->has('package') ? 'is-invalid' : '' }}"
                            >
                                <option value="">— Choisissez un package —</option>
                                @foreach(['Platinum' => '200 000 DH HT', 'Gold' => '160 000 DH HT', 'Silver' => '120 000 DH HT', 'Bronze' => '60 000 DH HT'] as $pkg => $prix)
                                    <option value="{{ $pkg }}" {{ old('package', request('package')) === $pkg ? 'selected' : '' }}>
                                        {{ $pkg }} — {{ $prix }}
                                    </option>
                                @endforeach
                            </select>
                            @error('package')
                                <span class="invalid-feedback" style="display:block;">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-grid">
                            {{-- Prénom --}}
                            <div class="form-group">
                                <label for="prenom">Prénom <span style="color:var(--rouge)">*</span></label>
                                <input
                                    type="text"
                                    id="prenom"
                                    name="prenom"
                                    class="form-control {{ $errors->has('prenom') ? 'is-invalid' : '' }}"
                                    value="{{ old('prenom') }}"
                                    placeholder="Votre prénom"
                                    required
                                >
                                @error('prenom')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Nom --}}
                            <div class="form-group">
                                <label for="nom">Nom <span style="color:var(--rouge)">*</span></label>
                                <input
                                    type="text"
                                    id="nom"
                                    name="nom"
                                    class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}"
                                    value="{{ old('nom') }}"
                                    placeholder="Votre nom de famille"
                                    required
                                >
                                @error('nom')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Email --}}
                            <div class="form-group">
                                <label for="email">Email professionnel <span style="color:var(--rouge)">*</span></label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                    value="{{ old('email') }}"
                                    placeholder="votre@email.com"
                                    required
                                >
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Téléphone --}}
                            <div class="form-group">
                                <label for="telephone">Téléphone</label>
                                <input
                                    type="tel"
                                    id="telephone"
                                    name="telephone"
                                    class="form-control {{ $errors->has('telephone') ? 'is-invalid' : '' }}"
                                    value="{{ old('telephone') }}"
                                    placeholder="+212 6 XX XX XX XX"
                                >
                                @error('telephone')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Société --}}
                            <div class="form-group">
                                <label for="societe">Société / Organisation <span style="color:var(--rouge)">*</span></label>
                                <input
                                    type="text"
                                    id="societe"
                                    name="societe"
                                    class="form-control {{ $errors->has('societe') ? 'is-invalid' : '' }}"
                                    value="{{ old('societe') }}"
                                    placeholder="Nom de votre entreprise"
                                    required
                                >
                                @error('societe')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Fonction --}}
                            <div class="form-group">
                                <label for="fonction">Fonction / Poste <span style="color:var(--rouge)">*</span></label>
                                <input
                                    type="text"
                                    id="fonction"
                                    name="fonction"
                                    class="form-control {{ $errors->has('fonction') ? 'is-invalid' : '' }}"
                                    value="{{ old('fonction') }}"
                                    placeholder="Ex : Directeur Export"
                                    required
                                >
                                @error('fonction')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Message --}}
                            <div class="form-group form-group-full">
                                <label for="message">Message (optionnel)</label>
                                <textarea
                                    id="message"
                                    name="message"
                                    class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}"
                                    placeholder="Questions particulières, besoins spécifiques..."
                                >{{ old('message') }}</textarea>
                                @error('message')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- RGPD --}}
                            <div class="form-group form-group-full">
                                <div class="checkbox-group">
                                    <input
                                        type="checkbox"
                                        id="rgpd"
                                        name="rgpd"
                                        value="1"
                                        {{ old('rgpd') ? 'checked' : '' }}
                                        required
                                    >
                                    <label for="rgpd">
                                        J'accepte que mes données personnelles (nom, email, société, fonction) soient collectées et traitées par ASMEX – Confédération Marocaine des Exportateurs, dans le seul cadre de l'organisation et du suivi de l'événement <strong>« L'Export à l'Ère du Digital et de l'Intelligence Artificielle »</strong> — 04 Juin 2026, Four Seasons Hotel Casablanca. Ces données ne seront ni revendues, ni transmises à des tiers sans votre consentement explicite.
                                        <a href="{{ route('contact') }}">En savoir plus</a>
                                    </label>
                                </div>
                                @error('rgpd')
                                    <span class="invalid-feedback" style="display:block;margin-top:4px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-submit" style="margin-top:28px;">
                            Confirmer mon inscription
                        </button>
                    </form>
                </div>

                {{-- SIDEBAR --}}
                <aside class="sidebar-info">

                    {{-- Info événement --}}
                    <div class="info-card-dark info-card">
                        <h3 class="info-card-title">L'Événement</h3>
                        <div class="info-item">
                            <img src="{{ asset('imges/icon/calendar-clock.png') }}" alt="Date" class="info-item-icon">
                            <div>
                                <span class="info-item-label">Date</span>
                                <span class="info-item-val">Jeudi 04 Juin 2026</span>
                            </div>
                        </div>
                        <div class="info-item">
                            <img src="{{ asset('imges/icon/clock.png') }}" alt="Horaires" class="info-item-icon">
                            <div>
                                <span class="info-item-label">Horaires</span>
                                <span class="info-item-val">08h30 – 17h00</span>
                            </div>
                        </div>
                        <div class="info-item">
                            <img src="{{ asset('imges/icon/marker.png') }}" alt="Lieu" class="info-item-icon">
                            <div>
                                <span class="info-item-label">Lieu</span>
                                <span class="info-item-val">Four Seasons Hotel<br>Casablanca, Maroc</span>
                            </div>
                        </div>
                        <div class="info-item">
                            <img src="{{ asset('imges/icon/group.png') }}" alt="Participants" class="info-item-icon">
                            <div>
                                <span class="info-item-label">Participants</span>
                                <span class="info-item-val">200–300 attendus</span>
                            </div>
                        </div>
                    </div>

                    {{-- Programme résumé --}}
                    <div class="info-card">
                        <h3 class="info-card-title">Programme résumé</h3>
                        <div class="programme-mini-list">
                            <div class="programme-mini-item">
                                <span class="mini-heure" style="color:var(--bleu);font-weight:700;">08h30</span>
                                <span style="color:var(--gris-texte);font-size:0.82rem;">Accueil & Enregistrement</span>
                            </div>
                            <div class="programme-mini-item">
                                <span class="mini-heure" style="color:var(--bleu);font-weight:700;">09h30</span>
                                <span style="color:var(--gris-texte);font-size:0.82rem;">Allocution d'Ouverture</span>
                            </div>
                            <div class="programme-mini-item">
                                <span class="mini-heure" style="color:var(--bleu);font-weight:700;">10h20</span>
                                <span style="color:var(--gris-texte);font-size:0.82rem;">Panel 1 – IA & Export</span>
                            </div>
                            <div class="programme-mini-item">
                                <span class="mini-heure" style="color:var(--bleu);font-weight:700;">11h30</span>
                                <span style="color:var(--gris-texte);font-size:0.82rem;">Panel 2 – Marketing IA</span>
                            </div>
                            <div class="programme-mini-item">
                                <span class="mini-heure" style="color:var(--bleu);font-weight:700;">14h00</span>
                                <span style="color:var(--gris-texte);font-size:0.82rem;">Panel 3 – Logistique</span>
                            </div>
                            <div class="programme-mini-item">
                                <span class="mini-heure" style="color:var(--bleu);font-weight:700;">15h00</span>
                                <span style="color:var(--gris-texte);font-size:0.82rem;">Use Cases & Démo Live</span>
                            </div>
                            <div class="programme-mini-item">
                                <span class="mini-heure" style="color:var(--bleu);font-weight:700;">17h00</span>
                                <span style="color:var(--gris-texte);font-size:0.82rem;">Clôture officielle</span>
                            </div>
                        </div>
                        <div style="margin-top:16px;">
                            <a href="{{ route('programme') }}" class="btn btn-bleu" style="width:100%;justify-content:center;font-size:0.85rem;padding:10px 16px;">
                                Voir le programme complet
                            </a>
                        </div>
                    </div>

                    {{-- Contact --}}
                    <div class="info-card">
                        <h3 class="info-card-title">Contact</h3>
                        <div class="info-item">
                            <img src="{{ asset('imges/icon/responsible.png') }}" alt="Responsable" class="info-item-icone">
                            <div>
                                <span class="info-item-label">Responsable</span>
                                <span class="info-item-val">Mme Hind LAHSINIA</span>
                            </div>
                        </div>
                        <div class="info-item">
                            <img src="{{ asset('imges/icon/telephone.png') }}" alt="Téléphone" class="info-item-icone">
                            <div>
                                <span class="info-item-label">Téléphone</span>
                                <span class="info-item-val">
                                    <a href="tel:+212661324503" style="color:var(--bleu);">+212 6 61 32 45 03</a>
                                </span>
                            </div>
                        </div>
                        <div class="info-item">
                            <img src="{{ asset('imges/icon/email.png') }}" alt="Email" class="info-item-icone">
                            <div>
                                <span class="info-item-label">Email</span>
                                <span class="info-item-val">
                                    <a href="mailto:h.lahsinia@asmex.org" style="color:var(--bleu);">h.lahsinia@asmex.org</a>
                                </span>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script src="{{ asset('js/inscription.js') }}" defer></script>
    <script>
        (function () {
            var group   = document.getElementById('sponsor-package-group');
            var select  = document.getElementById('package');
            var radios  = document.querySelectorAll('input[name="type"]');

            function toggle() {
                var checked = document.querySelector('input[name="type"]:checked');
                var isSponsor = checked && checked.value === 'Sponsor';
                group.style.display = isSponsor ? 'block' : 'none';
                if (!isSponsor) select.value = '';
            }

            radios.forEach(function (r) { r.addEventListener('change', toggle); });

            // Init on page load (pour old('type') ou request('type'))
            toggle();
        })();
    </script>
@endpush
