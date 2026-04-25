{{-- resources/views/sponsoring.blade.php --}}
@extends('layouts.app')

@section('title', 'Sponsoring – ASMEX Export à l\'Ère du Digital & IA 2026')
@push('meta_description')Devenez partenaire du forum ASMEX 2026. Packages Platinum, Gold, Silver, Bronze. Visibilité maximale face à 200–300 décideurs de l'export marocain.@endpush
@push('meta_keywords')sponsoring ASMEX, partenaire forum export, sponsor IA Maroc, package sponsoring Casablanca 2026@endpush

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/sponsoring.css') }}">
@endpush

@section('content')

    {{-- PAGE HERO --}}
    <section class="page-hero">
        <div class="page-hero-grid-bg"></div>
        <div class="container page-hero-inner">
            <span class="section-label">Opportunités de sponsoring</span>
            <h1 class="page-hero-title">Devenez Partenaire<br>de l'Événement</h1>
            <p class="page-hero-subtitle">
                Positionnez votre marque au cœur de l'écosystème export et digital marocain face à 200–300 décideurs.
            </p>
        </div>
    </section>

    {{-- SECTION POURQUOI SPONSOR --}}
    <section class="section-pourquoi-sponsor">
        <div class="container">
            <div class="section-header centered">
                <span class="section-label">Avantages communs</span>
                <h2 class="section-title">Pourquoi sponsoriser cet événement ?</h2>
                <p class="section-subtitle">
                    Tous les packages incluent ces avantages fondamentaux, garantissant une visibilité maximale pour votre marque.
                </p>
            </div>

            <div class="avantages-grid">
                @foreach($avantages_communs as $av)
                    <div class="avantage-card reveal reveal-delay-{{ $loop->index + 1 }}">
                        <img src="{{ asset('imges/icon/' . $av['icon']) }}" alt="{{ $av['titre'] }}" class="avantage-icon">
                        <h3 class="avantage-title">{{ $av['titre'] }}</h3>
                        <p class="avantage-desc">{{ $av['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION PACKAGES --}}
    <section class="section-packages">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Nos offres</span>
                <h2 class="section-title">Packages de Sponsoring</h2>
                <p class="section-subtitle">
                    Choisissez le package qui correspond à vos objectifs de visibilité et d'engagement.
                </p>
            </div>

            <div class="packages-stack">
                @foreach($packages as $package)
                    <div class="package-card package-{{ strtolower($package['tier']) }} reveal">
                        {{-- Gauche --}}
                        <div class="package-left">
                            <img src="{{ asset('imges/icon/' . $package['medal']) }}" alt="{{ $package['tier'] }}" class="package-medal">
                            <div class="package-tier">Package</div>
                            <div class="package-name">{{ $package['tier'] }}</div>
                            <div class="package-price">
                                {{ $package['price'] }}
                                <span class="package-ht">HT</span>
                            </div>
                        </div>

                        {{-- Milieu --}}
                        <div class="package-middle">
                            <ul class="avantages-list">
                                @foreach($package['avantages'] as $av)
                                    <li>{{ $av }}</li>
                                @endforeach
                            </ul>
                        </div>

                        {{-- Droite --}}
                        <div class="package-right">
                            <span class="package-badge badge-{{ strtolower($package['tier']) }}">
                                {{ $package['tier'] }}
                            </span>
                            <a href="{{ route('inscription') }}?type=Sponsor" class="btn btn-primary">
                                Choisir ce package
                            </a>
                            <a href="{{ route('contact') }}" class="btn btn-bleu" style="font-size:0.82rem;padding:8px 16px;">
                                Nous contacter
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION STAND --}}
    <section class="section-stand">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Équipement inclus</span>
                <h2 class="section-title">Votre Stand lors de l'Événement</h2>
                <p class="section-subtitle">
                    Chaque package inclut un stand entièrement équipé pour maximiser votre présence le jour J.
                </p>
            </div>

            <div class="stand-info-grid">
                {{-- Specs --}}
                <div class="stand-specs reveal">
                    <h3 class="stand-specs-title">Équipement du stand (3×2m)</h3>
                    @foreach($stand_specs as $key => $val)
                        <div class="stand-spec-row">
                            <span class="stand-spec-key">{{ $key }}</span>
                            <span class="stand-spec-val">{{ $val }}</span>
                        </div>
                    @endforeach
                </div>

                {{-- Contact --}}
                <div class="stand-contact reveal reveal-delay-1">
                    <h3 class="stand-contact-title">Intéressé par un package ?</h3>
                    <p class="stand-contact-sub">
                        Contactez notre responsable événement pour toute demande de renseignements ou de personnalisation.
                    </p>

                    <div class="stand-contact-person">
                        <div class="contact-avatar">HL</div>
                        <div>
                            <p class="contact-name">Mme Hind LAHSINIA</p>
                            <p class="contact-role">Responsable Événement — ASMEX</p>
                        </div>
                    </div>

                    <div class="stand-contact-links">
                        <a href="tel:+212661324503" class="stand-contact-link">
                            <img src="{{ asset('imges/icon/telephone.png') }}" alt="Téléphone" class="stand-contact-icon"> +212 6 61 32 45 03
                        </a>
                        <a href="mailto:contact@digitalexportforum.ma" class="stand-contact-link">
                            <img src="{{ asset('imges/icon/email.png') }}" alt="Email" class="stand-contact-icon"> contact@digitalexportforum.ma
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
