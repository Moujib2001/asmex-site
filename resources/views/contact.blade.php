{{-- resources/views/contact.blade.php --}}
@extends('layouts.app')

@section('title', 'Contact – ASMEX Export à l\'Ère du Digital & IA 2026')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')

    {{-- PAGE HERO --}}
    <section class="page-hero">
        <div class="page-hero-grid-bg"></div>
        <div class="container page-hero-inner">
            <span class="section-label">Nous contacter</span>
            <h1 class="page-hero-title">Une question sur l'événement ?</h1>
            <p class="page-hero-subtitle">
                Notre équipe est à votre disposition pour toute demande d'information, de partenariat ou d'accréditation.
            </p>
        </div>
    </section>

    {{-- SECTION CONTACT --}}
    <section class="section-contact">
        <div class="container">
            <div class="contact-layout">

                {{-- SIDEBAR --}}
                <aside class="contact-sidebar">

                    {{-- Carte contact personne --}}
                    <div class="contact-person-card">
                        <div class="person-avatar">HL</div>
                        <h3 class="person-name">Mme Hind LAHSINIA</h3>
                        <p class="person-role">Responsable Événement — ASMEX</p>

                        <div class="contact-links">
                            <a href="tel:+212661324503" class="contact-link">
                                <div class="contact-link-icon">
                                    <img src="{{ asset('imges/icon/telephone.png') }}" alt="Téléphone" class="contact-link-img">
                                </div>
                                <span>+212 6 61 32 45 03</span>
                            </a>
                            <a href="mailto:h.lahsinia@asmex.org" class="contact-link">
                                <div class="contact-link-icon">
                                    <img src="{{ asset('imges/icon/email.png') }}" alt="Email" class="contact-link-img">
                                </div>
                                <span>h.lahsinia@asmex.org</span>
                            </a>
                            <div class="contact-link">
                                <div class="contact-link-icon">
                                    <img src="{{ asset('imges/icon/layer.png') }}" alt="Organisation" class="contact-link-img">
                                </div>
                                <span>ASMEX – Confédération Marocaine des Exportateurs</span>
                            </div>
                        </div>
                    </div>

                    {{-- Horaires événement --}}
                    <div class="horaires-card">
                        <h3 class="horaires-title">Informations pratiques</h3>
                        <div class="horaire-item">
                            <span class="horaire-key">Date</span>
                            <span class="horaire-val">04 Juin 2026</span>
                        </div>
                        <div class="horaire-item">
                            <span class="horaire-key">Accueil</span>
                            <span class="horaire-val">08h30</span>
                        </div>
                        <div class="horaire-item">
                            <span class="horaire-key">Ouverture</span>
                            <span class="horaire-val">09h30</span>
                        </div>
                        <div class="horaire-item">
                            <span class="horaire-key">Clôture</span>
                            <span class="horaire-val">17h00</span>
                        </div>
                        <div class="horaire-item">
                            <span class="horaire-key">Lieu</span>
                            <span class="horaire-val">Four Seasons, Casablanca</span>
                        </div>
                        <div class="horaire-item">
                            <span class="horaire-key">Capacité</span>
                            <span class="horaire-val">200–300 participants</span>
                        </div>
                    </div>

                    {{-- Liens rapides --}}
                    <div class="horaires-card">
                        <h3 class="horaires-title">Liens rapides</h3>
                        <div style="display:flex;flex-direction:column;gap:10px;margin-top:4px;">
                            <a href="{{ route('inscription') }}" class="btn btn-primary" style="width:100%;justify-content:center;font-size:0.88rem;">
                                S'inscrire à l'événement
                            </a>
                            <a href="{{ route('sponsoring') }}" class="btn btn-bleu" style="width:100%;justify-content:center;font-size:0.88rem;">
                                Devenir sponsor
                            </a>
                            <a href="{{ route('programme') }}" class="btn btn-outline" style="border-color:rgba(27,43,107,0.25);color:var(--bleu);width:100%;justify-content:center;font-size:0.88rem;">
                                Voir le programme
                            </a>
                        </div>
                    </div>

                </aside>

                {{-- FORMULAIRE CONTACT --}}
                <div class="contact-form-card">
                    <h2 class="contact-form-title">Envoyez-nous un message</h2>
                    <p class="contact-form-subtitle">
                        Nous vous répondrons dans les plus brefs délais, généralement sous 24h ouvrées.
                    </p>

                    @if(session('success'))
                        <div class="alert-success">
                            <span class="alert-success-icon">✅</span>
                            <div class="alert-success-text">{{ session('success') }}</div>
                        </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST" class="contact-form" novalidate>
                        @csrf

                        <div class="contact-form-grid">
                            <div class="form-group">
                                <label for="nom">Nom complet <span style="color:var(--rouge)">*</span></label>
                                <input
                                    type="text"
                                    id="nom"
                                    name="nom"
                                    class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}"
                                    value="{{ old('nom') }}"
                                    placeholder="Prénom et nom"
                                    required
                                >
                                @error('nom')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email <span style="color:var(--rouge)">*</span></label>
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
                        </div>

                        <div class="form-group">
                            <label for="sujet">Sujet <span style="color:var(--rouge)">*</span></label>
                            <input
                                type="text"
                                id="sujet"
                                name="sujet"
                                class="form-control {{ $errors->has('sujet') ? 'is-invalid' : '' }}"
                                value="{{ old('sujet') }}"
                                placeholder="Objet de votre message"
                                required
                            >
                            @error('sujet')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="message">Message <span style="color:var(--rouge)">*</span></label>
                            <textarea
                                id="message"
                                name="message"
                                class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}"
                                placeholder="Décrivez votre demande en détail..."
                                required
                            >{{ old('message') }}</textarea>
                            @error('message')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-contact-submit">
                            Envoyer le message
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    {{-- SECTION MAP --}}
    <section class="section-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.4634456853!2d-7.677!3d33.589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd4778aa113b%3A0x4bff36e6bf2dbd89!2sFour%20Seasons%20Hotel%20Casablanca!5e0!3m2!1sfr!2sma!4v1700000000000"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Four Seasons Hotel Casablanca"
        ></iframe>

        <div class="map-overlay-badge">
            <span class="map-badge-title">Four Seasons Hotel</span>
            <span class="map-badge-sub">Casablanca, Maroc — 04 Juin 2026</span>
        </div>
    </section>

@endsection
