{{-- resources/views/intervenants.blade.php --}}
@extends('layouts.app')

@section('title', 'Intervenants – ASMEX Export à l\'Ère du Digital & IA 2026')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/intervenants.css') }}">
@endpush

@section('content')

    {{-- PAGE HERO --}}
    <section class="page-hero">
        <div class="page-hero-grid-bg"></div>
        <div class="container page-hero-inner">
            <span class="section-label">Experts & Décideurs</span>
            <h1 class="page-hero-title">Les Intervenants</h1>
            <p class="page-hero-subtitle">
                Plus de 20 experts, dirigeants et innovateurs issus des sphères publique et privée, réunis autour de l'export digital et de l'IA.
            </p>
        </div>
    </section>

    {{-- SECTION INTERVENANTS --}}
    <section class="section-intervenants">
        <div class="container">

            {{-- Filtres --}}
            <div class="speakers-filters">
                @foreach($filters as $filter)
                    <button
                        class="filter-tag {{ $filter['key'] === 'all' ? 'active' : '' }}"
                        data-filter="{{ $filter['key'] }}"
                    >
                        {{ $filter['label'] }}
                    </button>
                @endforeach
            </div>

            {{-- Grille intervenants --}}
            <div class="speakers-grid">
                @foreach($intervenants as $intervenant)
                    @php
                        $prenom = $intervenant['prenom'];
                        $nom    = $intervenant['nom'];
                        $initP  = mb_strtoupper(mb_substr($prenom, 0, 1));
                        $initN  = mb_strtoupper(mb_substr($nom, 0, 1));
                        $initiales = $initP . $initN;

                        $panelLabel = match($intervenant['panel']) {
                            'ouverture' => 'Ouverture officielle',
                            'keynote'   => 'Keynote',
                            'panel1'    => 'Panel 1 – IA & Export',
                            'panel2'    => 'Panel 2 – Marketing IA',
                            'panel3'    => 'Panel 3 – Logistique',
                            'usecase'   => 'Use Cases',
                            default     => $intervenant['panel']
                        };
                    @endphp

                    <div
                        class="speaker-card reveal"
                        data-panel="{{ $intervenant['panel'] }}"
                    >
                        <div class="speaker-card-top">
                            <div class="speaker-card-avatar avatar-{{ $intervenant['couleur'] }}">
                                {{ $initiales }}
                            </div>
                            <h3 class="speaker-card-name">{{ $prenom }} {{ $nom }}</h3>
                            <p class="speaker-card-title">{{ $intervenant['titre'] }}</p>
                            @if($intervenant['org'])
                                <p class="speaker-card-org">{{ $intervenant['org'] }}</p>
                            @endif
                        </div>

                        <div class="speaker-card-bottom">
                            <span class="speaker-panel-tag tag-{{ $intervenant['panel'] }}">
                                {{ $panelLabel }}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

@endsection

@push('scripts')
    <script src="{{ asset('js/intervenants.js') }}" defer></script>
@endpush
