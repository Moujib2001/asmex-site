<?php
// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $stats = [
            ['number' => 300, 'label' => 'Participants attendus', 'suffix' => '+'],
            ['number' => 20,  'label' => 'Intervenants experts', 'suffix' => '+'],
            ['number' => 3,   'label' => 'Panels thématiques',   'suffix' => ''],
            ['number' => 8,   'label' => 'Heures de programme',  'suffix' => 'h'],
        ];

        $panels = [
            [
                'numero'  => '01',
                'titre'   => 'L\'IA, Levier Stratégique pour l\'Export',
                'heure'   => '10h20',
                'couleur' => 'bleu',
                'icon'    => '🧠',
                'desc'    => 'Comment l\'intelligence artificielle transforme les stratégies d\'exportation des entreprises marocaines.',
            ],
            [
                'numero'  => '02',
                'titre'   => 'Prospection & Marketing à l\'Ère de l\'IA',
                'heure'   => '11h30',
                'couleur' => 'rouge',
                'icon'    => '📡',
                'desc'    => 'Nouveaux outils IA pour la prospection B2B internationale et le marketing digital export.',
            ],
            [
                'numero'  => '03',
                'titre'   => 'IA & Performance Logistique à l\'International',
                'heure'   => '14h00',
                'couleur' => 'cyan',
                'icon'    => '🚢',
                'desc'    => 'Optimisation logistique, douanes intelligentes et plateformes digitales au service de l\'export.',
            ],
        ];

        $partenaires = [
            ['nom' => 'ASMEX',   'logo' => 'asmex-logo.png'],
            ['nom' => 'PORTNET', 'logo' => 'portnet-logo.png'],
            ['nom' => 'APEBI',   'logo' => 'apebi-logo.png'],
        ];

        return view('home', compact('stats', 'panels', 'partenaires'));
    }
}
