<?php
// app/Http/Controllers/InscriptionController.php

namespace App\Http\Controllers;

use App\Mail\InscriptionConfirmation;
use App\Mail\InscriptionNotification;
use App\Models\Inscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InscriptionController extends Controller
{
    public function index()
    {
        return view('inscription');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'prenom'    => 'required|string|max:100',
            'nom'       => 'required|string|max:100',
            'email'     => 'required|email|max:200',
            'telephone' => 'nullable|string|max:30',
            'societe'   => 'required|string|max:200',
            'fonction'  => 'required|string|max:200',
            'type'      => 'required|in:Participant,Sponsor,Presse,Intervenant',
            'package'   => 'nullable|in:Platinum,Gold,Silver,Bronze',
            'message'   => 'nullable|string|max:1000',
            'rgpd'      => 'required|accepted',
        ]);

        $inscription = Inscription::create($validated);

        try {
            Mail::to($inscription->email)->send(new InscriptionConfirmation($inscription));
            Mail::to('h.lahsinia@asmex.org')->send(new InscriptionNotification($inscription));
        } catch (\Exception $e) {
            // Silently fail on mail errors — inscription is saved regardless
        }

        return redirect()->route('inscription')->with(
            'success',
            'Votre inscription a bien été enregistrée ! Un email de confirmation vous a été envoyé à ' . $inscription->email . '.'
        );
    }
}
