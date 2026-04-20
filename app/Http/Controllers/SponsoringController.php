<?php
// app/Http/Controllers/SponsoringController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SponsoringController extends Controller
{
    public function index()
    {
        $packages = [
            [
                'tier'    => 'Platinum',
                'price'   => '200 000 DH HT',
                'theme'   => 'platinum',
                'medal'   => '🏆',
                'avantages' => [
                    'Logo en première position sur tous les supports communication',
                    'Prise de parole de 10 min lors de la plénière d\'ouverture',
                    'Table ronde dédiée (30 min)',
                    'Stand premium 6m² (parquet, comptoir, table, chaises)',
                    'Panneau 120×100cm personnalisé',
                    '5 invitations VIP à l\'événement',
                    'Présence sur tous les réseaux sociaux ASMEX',
                    'Mention dans le communiqué de presse',
                    'Accès liste participants (avec accord RGPD)',
                    'Présence dans le programme officiel',
                ],
            ],
            [
                'tier'    => 'Gold',
                'price'   => '160 000 DH HT',
                'theme'   => 'gold',
                'medal'   => '🥇',
                'avantages' => [
                    'Logo en deuxième position sur tous les supports communication',
                    'Prise de parole de 5 min lors d\'un panel',
                    'Stand 3×2m (parquet, comptoir, table, 3 chaises)',
                    'Panneau 120×100cm personnalisé',
                    '4 invitations à l\'événement',
                    'Présence sur les réseaux sociaux ASMEX',
                    'Mention dans le communiqué de presse',
                    'Présence dans le programme officiel',
                ],
            ],
            [
                'tier'    => 'Silver',
                'price'   => '120 000 DH HT',
                'theme'   => 'silver',
                'medal'   => '🥈',
                'avantages' => [
                    'Logo sur les supports communication',
                    'Stand 3×2m (parquet, comptoir, table, 3 chaises)',
                    'Panneau 120×100cm personnalisé',
                    '3 invitations à l\'événement',
                    'Présence sur les réseaux sociaux ASMEX',
                    'Présence dans le programme officiel',
                ],
            ],
            [
                'tier'    => 'Bronze',
                'price'   => '60 000 DH HT',
                'theme'   => 'bronze',
                'medal'   => '🥉',
                'avantages' => [
                    'Logo sur les supports communication',
                    'Stand 3×2m (parquet, comptoir, table, 3 chaises)',
                    'Panneau 120×100cm personnalisé',
                    '2 invitations à l\'événement',
                    'Présence dans le programme officiel',
                ],
            ],
        ];

        $avantages_communs = [
            ['icon' => '📢', 'titre' => 'Visibilité Communication', 'desc' => 'Logo sur tous les supports de communication de l\'événement'],
            ['icon' => '📱', 'titre' => 'Réseaux Sociaux',          'desc' => 'Présence et mentions sur les réseaux sociaux ASMEX'],
            ['icon' => '🎤', 'titre' => 'Participation Panels',     'desc' => 'Participation aux panels thématiques de l\'événement'],
            ['icon' => '🏢', 'titre' => 'Stand 3×2m',               'desc' => 'Stand équipé : parquet, comptoir, table, 3 chaises, panneau 120×100cm'],
        ];

        $stand_specs = [
            'Dimensions'   => '3m × 2m',
            'Sol'          => 'Parquet',
            'Mobilier'     => 'Comptoir + 1 table + 3 chaises',
            'Signalétique' => 'Panneau personnalisé 120×100cm',
            'Électricité'  => 'Incluse (2 prises)',
            'Internet'     => 'Wifi événement',
        ];

        return view('sponsoring', compact('packages', 'avantages_communs', 'stand_specs'));
    }
}
