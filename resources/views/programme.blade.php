{{-- resources/views/programme.blade.php --}}
@extends('layouts.app')

@section('title', 'Programme – ASMEX Export à l\'Ère du Digital & IA 2026')
@push('meta_description')Découvrez le programme complet du forum ASMEX 2026 : keynotes, panels IA & export, use cases, networking. 04 Juin 2026, Four Seasons Hotel Casablanca.@endpush
@push('meta_keywords')programme ASMEX 2026, panels IA, export digital, keynote, networking, Four Seasons Casablanca@endpush

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/programme.css') }}">
@endpush

@section('content')

    {{-- PAGE HERO --}}
    <section class="page-hero">
        <div class="page-hero-grid-bg"></div>
        <div class="container page-hero-inner">
            <span class="section-label">04 Juin 2026</span>
            <h1 class="page-hero-title">Programme de la Journée</h1>
            <p class="page-hero-subtitle">
                Une journée intensive de 08h30 à 17h00, rythmée par des keynotes, panels d'experts, use cases et démonstrations live.
            </p>
            <div class="page-hero-meta">
                <div class="page-hero-meta-item">
                    <img src="{{ asset('imges/icon/calendar-clock.png') }}" alt="Date" class="page-hero-meta-icon">
                    <span><strong>Jeudi 04 Juin 2026</strong></span>
                </div>
                <div class="page-hero-meta-item">
                    <img src="{{ asset('imges/icon/clock.png') }}" alt="Horaires" class="page-hero-meta-icon">
                    <span><strong>08h30 – 17h00</strong></span>
                </div>
                <div class="page-hero-meta-item">
                    <img src="{{ asset('imges/icon/marker.png') }}" alt="Lieu" class="page-hero-meta-icon">
                    <span><strong>Four Seasons Hotel</strong>, Casablanca</span>
                </div>
            </div>
        </div>
    </section>

    {{-- TIMELINE --}}
    <section class="section-timeline">
        <div class="container">

            {{-- Légende --}}
            <div class="timeline-legend">
                <div class="legend-item"><span class="legend-dot dot-ouverture"></span> Ouverture officielle</div>
                <div class="legend-item"><span class="legend-dot dot-keynote"></span> Keynote</div>
                <div class="legend-item"><span class="legend-dot dot-panel"></span> Panel thématique</div>
                <div class="legend-item"><span class="legend-dot dot-pause"></span> Pause / Déjeuner</div>
                <div class="legend-item"><span class="legend-dot dot-use-case"></span> Use Cases</div>
                <div class="legend-item"><span class="legend-dot dot-demo"></span> Démonstration</div>
                <div class="legend-item"><span class="legend-dot dot-debat"></span> Débat / Questions</div>
            </div>

            {{-- Timeline items --}}
            <div class="timeline">
                @foreach($programme as $item)
                    @php
                        $typeClass = match($item['type']) {
                            'panel'           => 'panel-item',
                            'keynote'         => 'keynote-item',
                            'pause'           => 'break-item',
                            'ouverture'       => 'ouverture-item',
                            'use-case'        => 'use-case-item',
                            'demo'            => 'demo-item',
                            default           => ''
                        };
                        $badgeClass = 'type-' . $item['type'];
                        $badgeLabel = match($item['type']) {
                            'ouverture'       => 'Ouverture',
                            'keynote'         => 'Keynote',
                            'panel'           => 'Panel',
                            'pause'           => 'Pause',
                            'use-case'        => 'Use Cases',
                            'demo'            => 'Démo Live',
                            'debat'           => 'Débat',
                            'recommandations' => 'Recommandations',
                            'cloture'         => 'Clôture',
                            'accueil'         => 'Accueil',
                            default           => $item['type']
                        };
                    @endphp

                    <div class="timeline-item {{ $typeClass }}">
                        <div class="timeline-time">
                            <span class="timeline-time-text">{{ $item['heure'] }}</span>
                        </div>

                        <div class="timeline-body">
                            <div class="timeline-body-header">
                                <span class="timeline-type {{ $badgeClass }}">{{ $badgeLabel }}</span>
                                <h3 class="timeline-title">{{ $item['titre'] }}</h3>
                            </div>
                            <p class="timeline-desc">{{ $item['desc'] }}</p>

                            @if(count($item['speakers']) > 0)
                                <div class="speakers-list">
                                    @foreach($item['speakers'] as $speaker)
                                        @php
                                            $initiales = mb_strtoupper(mb_substr($speaker['nom'], 0, 1));
                                            $parts = explode(' ', $speaker['nom']);
                                            if (count($parts) >= 2) {
                                                $initiales = mb_strtoupper(mb_substr($parts[0], 0, 1) . mb_substr(end($parts), 0, 1));
                                            }
                                        @endphp
                                        <div class="speaker-chip">
                                            <div class="chip-avatar">{{ $initiales }}</div>
                                            <div class="chip-info">
                                                <span class="chip-nom">{{ $speaker['nom'] }}</span>
                                                <span class="chip-titre">{{ $speaker['titre'] }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

@endsection

@push('scripts')
    <script src="{{ asset('js/programme.js') }}" defer></script>
@endpush
