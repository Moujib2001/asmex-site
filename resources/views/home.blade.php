{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('title', 'ASMEX – L\'Export Digital à l\'Ère de l\'IA – 04 Juin 2026, Casablanca')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

    {{-- ============================================================
         HERO
    ============================================================ --}}
    <section class="hero">
        <div class="hero-grid-bg"></div>
        <div class="hero-orb-1"></div>
        <div class="hero-orb-2"></div>

        <div class="container hero-inner">
            <div class="hero-content">
                <div class="hero-badge">
                    <span class="hero-badge-dot"></span>
                    <span class="hero-badge-text">Événement Professionnel — 04 Juin 2026</span>
                </div>

                <h1 class="hero-title">
                    L'Export Digital<br>
                    à l'Ère de <span>l'Intelligence<br>Artificielle</span>
                </h1>

                <p class="hero-subtitle">
                    Rejoignez 200 à 300 décideurs, experts et innovateurs pour une journée dédiée à la transformation digitale de l'export marocain.
                </p>

                <div class="hero-meta">
                    <div class="hero-meta-item">
                        <span class="hero-meta-icon">📅</span>
                        <span><strong>04 Juin 2026</strong> — 08h30 à 17h00</span>
                    </div>
                    <div class="hero-meta-item">
                        <span class="hero-meta-icon">📍</span>
                        <span><strong>Four Seasons Hotel</strong>, Casablanca</span>
                    </div>
                    <div class="hero-meta-item">
                        <span class="hero-meta-icon">🏛️</span>
                        <span>Organisé par <strong>ASMEX</strong></span>
                    </div>
                </div>

                <div class="hero-actions">
                    <a href="{{ route('inscription') }}" class="btn btn-primary">
                        S'inscrire maintenant
                    </a>
                    <a href="{{ route('programme') }}" class="btn btn-outline">
                        Voir le programme
                    </a>
                </div>
            </div>
        </div>

        <div class="hero-scroll" onclick="window.scrollBy({top: window.innerHeight, behavior:'smooth'})">
            <div class="hero-scroll-line"></div>
            <span>Découvrir</span>
        </div>
    </section>

    {{-- ============================================================
         PARTENAIRES
    ============================================================ --}}
    <section class="section-partenaires">
        <div class="container">
            <p class="partenaires-label">Organisateurs & Partenaires</p>
            <div class="partenaires-logos">
                @foreach($partenaires as $p)
                    <div class="partenaire-logo-wrap">
                        <span class="partenaire-name-fallback">{{ $p['nom'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================================================
         CHIFFRES CLÉS
    ============================================================ --}}
    <section class="section-chiffres">
        <div class="container">
            <div class="chiffres-grid">
                @foreach($stats as $stat)
                    <div class="chiffre-card reveal">
                        <div class="chiffre-number">
                            <span class="counter" data-target="{{ $stat['number'] }}">0</span>
                            <span class="chiffre-suffix">{{ $stat['suffix'] }}</span>
                        </div>
                        <div class="chiffre-label">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================================================
         PANELS THÉMATIQUES
    ============================================================ --}}
    <section class="section-panels">
        <div class="container">
            <div class="section-header centered">
                <span class="section-label">Programme</span>
                <h2 class="section-title">3 Panels Thématiques</h2>
                <p class="section-subtitle">
                    Une journée structurée autour des grands enjeux de l'export digital marocain à l'ère de l'IA.
                </p>
            </div>

            <div class="panels-grid">
                @foreach($panels as $panel)
                    <div class="panel-card reveal reveal-delay-{{ $loop->index + 1 }}">
                        <div class="panel-card-number">{{ $panel['numero'] }}</div>
                        <span class="panel-card-icon">{{ $panel['icon'] }}</span>
                        <span class="panel-card-heure">{{ $panel['heure'] }}</span>
                        <h3 class="panel-card-title">{{ $panel['titre'] }}</h3>
                        <p class="panel-card-desc">{{ $panel['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================================================
         POURQUOI PARTICIPER
    ============================================================ --}}
    <section class="section-pourquoi">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Pourquoi participer</span>
                <h2 class="section-title">Une opportunité unique pour votre entreprise</h2>
                <p class="section-subtitle">
                    Rejoignez les décideurs, experts et innovateurs de l'export marocain.
                </p>
            </div>

            <div class="pourquoi-grid">
                <div class="pourquoi-card reveal">
                    <div class="pourquoi-icon bleu">🧠</div>
                    <div>
                        <h3 class="pourquoi-content-title">Expertise IA de Pointe</h3>
                        <p class="pourquoi-content-desc">
                            Accédez aux dernières avancées en intelligence artificielle appliquée à l'export avec des experts reconnus au Maroc et à l'international.
                        </p>
                    </div>
                </div>

                <div class="pourquoi-card reveal reveal-delay-1">
                    <div class="pourquoi-icon rouge">🤝</div>
                    <div>
                        <h3 class="pourquoi-content-title">Networking de Qualité</h3>
                        <p class="pourquoi-content-desc">
                            Rencontrez 200 à 300 décideurs, directeurs export, entrepreneurs et représentants institutionnels lors des temps de networking.
                        </p>
                    </div>
                </div>

                <div class="pourquoi-card reveal reveal-delay-2">
                    <div class="pourquoi-icon cyan">💡</div>
                    <div>
                        <h3 class="pourquoi-content-title">Solutions Concrètes</h3>
                        <p class="pourquoi-content-desc">
                            Découvrez des use cases réels et des démonstrations live d'outils IA directement applicables à votre activité export.
                        </p>
                    </div>
                </div>

                <div class="pourquoi-card reveal reveal-delay-3">
                    <div class="pourquoi-icon green">📊</div>
                    <div>
                        <h3 class="pourquoi-content-title">Recommandations Officielles</h3>
                        <p class="pourquoi-content-desc">
                            Participez à l'élaboration des recommandations conjointes ASMEX, APEBI et Secrétariat d'État au Commerce Extérieur.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         CTA
    ============================================================ --}}
    <section class="section-cta">
        <div class="container cta-inner">
            <span class="section-label" style="justify-content:center;display:flex;margin-bottom:20px;">
                Inscription ouverte
            </span>
            <h2 class="cta-title">Réservez votre place dès maintenant</h2>
            <p class="cta-sub">
                Places limitées. Ne manquez pas cette opportunité de vous positionner à l'avant-garde de l'export digital marocain.
            </p>
            <div class="cta-actions">
                <a href="{{ route('inscription') }}" class="btn btn-primary">
                    S'inscrire — 04 Juin 2026
                </a>
                <a href="{{ route('sponsoring') }}" class="btn btn-outline">
                    Devenir sponsor
                </a>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script src="{{ asset('js/home.js') }}" defer></script>
@endpush
