<?php
// app/Http/Controllers/IntervenantsController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntervenantsController extends Controller
{
    public function index()
    {
        $intervenants = [
            // Ouverture
            [
                'prenom'  => 'Hassan',
                'nom'     => 'Sentissi El Idrissi',
                'titre'   => 'Président',
                'org'     => 'ASMEX',
                'panel'   => 'ouverture',
                'couleur' => 'bleu',
            ],
            [
                'prenom'  => 'Amal',
                'nom'     => 'El Fallah Seghrouchni',
                'titre'   => 'Ministre déléguée',
                'org'     => 'Transition Numérique',
                'panel'   => 'ouverture',
                'couleur' => 'bleu',
            ],
            [
                'prenom'  => 'Omar',
                'nom'     => 'HEJJIRA',
                'titre'   => 'Secrétaire d\'État',
                'org'     => 'Commerce Extérieur',
                'panel'   => 'ouverture',
                'couleur' => 'bleu',
            ],
            [
                'prenom'  => 'Ali',
                'nom'     => 'SEDDIKI',
                'titre'   => 'Directeur Général',
                'org'     => 'AMDIE',
                'panel'   => 'ouverture',
                'couleur' => 'bleu',
            ],
            // Keynote
            [
                'prenom'  => 'Hicham',
                'nom'     => 'AMADI',
                'titre'   => 'Président Pôle Économie Numérique',
                'org'     => 'ASMEX',
                'panel'   => 'keynote',
                'couleur' => 'purple',
            ],
            [
                'prenom'  => 'Badr',
                'nom'     => 'BELLAJ',
                'titre'   => 'Blockchain Expert',
                'org'     => '',
                'panel'   => 'keynote',
                'couleur' => 'purple',
            ],
            // Panel 1
            [
                'prenom'  => 'Rédouane',
                'nom'     => 'EL HALOUI',
                'titre'   => 'Président',
                'org'     => 'APEBI',
                'panel'   => 'panel1',
                'couleur' => 'cyan',
            ],
            [
                'prenom'  => 'Zouheir',
                'nom'     => 'LAKHDISSI',
                'titre'   => 'Expert Digital & IA',
                'org'     => '',
                'panel'   => 'panel1',
                'couleur' => 'cyan',
            ],
            [
                'prenom'  => 'Amine',
                'nom'     => 'MEZOUAGHI',
                'titre'   => 'Directeur Général',
                'org'     => 'Agence ADD',
                'panel'   => 'panel1',
                'couleur' => 'cyan',
            ],
            [
                'prenom'  => 'Oussra',
                'nom'     => 'EL HATIB',
                'titre'   => 'Oracle R&D | Présidente Commission IA',
                'org'     => 'APEBI',
                'panel'   => 'panel1',
                'couleur' => 'cyan',
            ],
            [
                'prenom'  => 'Rajae',
                'nom'     => 'OUADDARI',
                'titre'   => 'Directrice Delivery & IA',
                'org'     => 'ALTEN Maroc',
                'panel'   => 'panel1',
                'couleur' => 'cyan',
            ],
            // Panel 2
            [
                'prenom'  => 'Moncef',
                'nom'     => 'DADOUN',
                'titre'   => 'Fondateur',
                'org'     => 'Human Marketing',
                'panel'   => 'panel2',
                'couleur' => 'rouge',
            ],
            [
                'prenom'  => 'Amir',
                'nom'     => 'LEHMAM',
                'titre'   => 'Co-fondateur',
                'org'     => 'Captely',
                'panel'   => 'panel2',
                'couleur' => 'rouge',
            ],
            [
                'prenom'  => 'Denis',
                'nom'     => 'MARSHLAUT',
                'titre'   => 'Dirigeant',
                'org'     => 'Myopla',
                'panel'   => 'panel2',
                'couleur' => 'rouge',
            ],
            [
                'prenom'  => 'Fred',
                'nom'     => 'ESSABAH',
                'titre'   => 'Président commission Offshoring',
                'org'     => 'APEBI',
                'panel'   => 'panel2',
                'couleur' => 'rouge',
            ],
            // Panel 3
            [
                'prenom'  => 'Abdelaziz',
                'nom'     => 'MANTRACH',
                'titre'   => 'Pôle Logistique',
                'org'     => 'ASMEX',
                'panel'   => 'panel3',
                'couleur' => 'green',
            ],
            [
                'prenom'  => 'Youssef',
                'nom'     => 'AHOUZI',
                'titre'   => 'Directeur Général',
                'org'     => 'PORTNET',
                'panel'   => 'panel3',
                'couleur' => 'green',
            ],
            [
                'prenom'  => 'Driss',
                'nom'     => 'BENSOUDA',
                'titre'   => 'Directeur',
                'org'     => 'S2D Solutions',
                'panel'   => 'panel3',
                'couleur' => 'green',
            ],
            [
                'prenom'  => 'Yassine',
                'nom'     => 'LASRI',
                'titre'   => 'Fondateur',
                'org'     => 'Synaptique',
                'panel'   => 'panel3',
                'couleur' => 'green',
            ],
            // Use Cases
            [
                'prenom'  => 'Brahim',
                'nom'     => 'EL ALLIOUI',
                'titre'   => 'Fondateur',
                'org'     => 'ActaDiag by e-Acta',
                'panel'   => 'usecase',
                'couleur' => 'dark',
            ],
            [
                'prenom'  => 'Aziz',
                'nom'     => 'BENSLIMANE',
                'titre'   => 'Fondateur',
                'org'     => 'Tython / TYBOT.MA',
                'panel'   => 'usecase',
                'couleur' => 'dark',
            ],
            [
                'prenom'  => 'Olivier',
                'nom'     => 'MARTINEZ',
                'titre'   => 'Co-fondateur',
                'org'     => 'Captely',
                'panel'   => 'usecase',
                'couleur' => 'dark',
            ],
        ];

        $filters = [
            ['key' => 'all',      'label' => 'Tous'],
            ['key' => 'ouverture','label' => 'Ouverture'],
            ['key' => 'keynote',  'label' => 'Keynote'],
            ['key' => 'panel1',   'label' => 'Panel 1 – IA & Export'],
            ['key' => 'panel2',   'label' => 'Panel 2 – Marketing IA'],
            ['key' => 'panel3',   'label' => 'Panel 3 – Logistique'],
            ['key' => 'usecase',  'label' => 'Use Cases'],
        ];

        return view('intervenants', compact('intervenants', 'filters'));
    }
}
