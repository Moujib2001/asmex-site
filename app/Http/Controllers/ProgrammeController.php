<?php
// app/Http/Controllers/ProgrammeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    public function index()
    {
        $programme = [
            [
                'heure'      => '08h30',
                'titre'      => 'Accueil & Enregistrement',
                'desc'       => 'Café d\'accueil et enregistrement des participants',
                'type'       => 'accueil',
                'speakers'   => [],
            ],
            [
                'heure'      => '09h30',
                'titre'      => 'Allocution d\'Ouverture',
                'desc'       => 'Discours d\'ouverture officiels',
                'type'       => 'ouverture',
                'speakers'   => [
                    ['nom' => 'Hassan Sentissi El Idrissi', 'titre' => 'Président, ASMEX'],
                    ['nom' => 'Amal El Fallah Seghrouchni', 'titre' => 'Ministre déléguée, Transition Numérique'],
                    ['nom' => 'Omar HEJJIRA',               'titre' => 'Secrétaire d\'État, Commerce Extérieur'],
                    ['nom' => 'Ali SEDDIKI',                'titre' => 'DG, AMDIE'],
                ],
            ],
            [
                'heure'      => '10h00',
                'titre'      => 'Keynote',
                'desc'       => 'Présentation des grandes tendances IA pour l\'export digital',
                'type'       => 'keynote',
                'speakers'   => [
                    ['nom' => 'Hicham AMADI', 'titre' => 'Président Pôle Économie Numérique, ASMEX'],
                    ['nom' => 'Badr BELLAJ',  'titre' => 'Blockchain Expert'],
                ],
            ],
            [
                'heure'      => '10h20',
                'titre'      => 'Panel 1 : L\'IA, Levier Stratégique pour l\'Export',
                'desc'       => 'Comment l\'intelligence artificielle transforme les stratégies d\'exportation',
                'type'       => 'panel',
                'speakers'   => [
                    ['nom' => 'Rédouane EL HALOUI',  'titre' => 'Président, APEPI'],
                    ['nom' => 'Zouheir LAKHDISSI',   'titre' => 'Expert Digital & IA'],
                    ['nom' => 'Amine MEZOUAGHI',      'titre' => 'DG, Agence ADD'],
                    ['nom' => 'Oussra EL HATIB',      'titre' => 'Oracle R&D | Présidente Commission IA APEBI'],
                    ['nom' => 'Rajae OUADDARI',       'titre' => 'ALTEN Maroc – Directrice Delivery & IA'],
                ],
            ],
            [
                'heure'      => '11h00',
                'titre'      => 'Pause café & Networking',
                'desc'       => 'Pause et échanges entre participants',
                'type'       => 'pause',
                'speakers'   => [],
            ],
            [
                'heure'      => '11h30',
                'titre'      => 'Panel 2 : Prospection & Marketing à l\'Ère de l\'IA',
                'desc'       => 'Nouveaux outils IA pour la prospection B2B internationale',
                'type'       => 'panel',
                'speakers'   => [
                    ['nom' => 'Représentant SEC',  'titre' => 'Secrétariat d\'État, Commerce Extérieur'],
                    ['nom' => 'Moncef DADOUN',     'titre' => 'Human Marketing (IA Agency)'],
                    ['nom' => 'Amir LEHMAM',       'titre' => 'Captely (IA prospection B2B)'],
                    ['nom' => 'Denis MARSHLAUT',   'titre' => 'Myopla – BPO & CX augmentés par l\'IA'],
                    ['nom' => 'Fred ESSABAH',      'titre' => 'Président commission Offshoring, APEBI'],
                ],
            ],
            [
                'heure'      => '12h30',
                'titre'      => 'Déjeuner & Réseautage',
                'desc'       => 'Déjeuner gastronomique et networking',
                'type'       => 'pause',
                'speakers'   => [],
            ],
            [
                'heure'      => '14h00',
                'titre'      => 'Panel 3 : IA & Performance Logistique à l\'International',
                'desc'       => 'Optimisation logistique et douanes intelligentes',
                'type'       => 'panel',
                'speakers'   => [
                    ['nom' => 'Abdelaziz MANTRACH', 'titre' => 'Pôle Logistique, ASMEX'],
                    ['nom' => 'Youssef AHOUZI',     'titre' => 'DG PORTNET, Plateforme TIJARIA'],
                    ['nom' => 'Représentant ADII',  'titre' => 'Douanes intelligentes'],
                    ['nom' => 'Driss BENSOUDA',     'titre' => 'S2D Solutions'],
                    ['nom' => 'Yassine LASRI',      'titre' => 'Synaptique'],
                ],
            ],
            [
                'heure'      => '15h00',
                'titre'      => 'Use Cases & Success Stories',
                'desc'       => 'Retours d\'expérience et démonstrations de cas concrets',
                'type'       => 'use-case',
                'speakers'   => [
                    ['nom' => 'Brahim EL ALLIOUI',  'titre' => 'ActaDiag by e-Acta (AgriTech IA)'],
                    ['nom' => 'Aziz BENSLIMANE',     'titre' => 'Tython / TYBOT.MA'],
                    ['nom' => 'Amir LEHMAM',         'titre' => 'Captely'],
                    ['nom' => 'Olivier MARTINEZ',    'titre' => 'Captely'],
                ],
            ],
            [
                'heure'      => '15h30',
                'titre'      => 'Démonstration live outils IA',
                'desc'       => 'Démonstrations en direct des solutions IA pour l\'export',
                'type'       => 'demo',
                'speakers'   => [],
            ],
            [
                'heure'      => '16h00',
                'titre'      => 'Questions – Débat',
                'desc'       => 'Session de questions-réponses ouverte au public',
                'type'       => 'debat',
                'speakers'   => [],
            ],
            [
                'heure'      => '16h30',
                'titre'      => 'Recommandations',
                'desc'       => 'Recommandations conjointes ASMEX + APEBI + Secrétariat d\'État au Commerce Extérieur',
                'type'       => 'recommandations',
                'speakers'   => [],
            ],
            [
                'heure'      => '17h00',
                'titre'      => 'Clôture',
                'desc'       => 'Clôture officielle de l\'événement',
                'type'       => 'cloture',
                'speakers'   => [],
            ],
        ];

        return view('programme', compact('programme'));
    }
}
