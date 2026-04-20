<?php
// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'nom'     => 'required|string|max:200',
            'email'   => 'required|email|max:200',
            'sujet'   => 'required|string|max:300',
            'message' => 'required|string|max:2000',
        ]);

        try {
            Mail::raw(
                "Nom : {$validated['nom']}\nEmail : {$validated['email']}\nSujet : {$validated['sujet']}\n\nMessage :\n{$validated['message']}",
                function ($mail) use ($validated) {
                    $mail->to('h.lahsinia@asmex.org')
                         ->subject('Contact site ASMEX – ' . $validated['sujet'])
                         ->replyTo($validated['email'], $validated['nom']);
                }
            );
        } catch (\Exception $e) {
            // Silently fail
        }

        return redirect()->route('contact')->with(
            'success',
            'Votre message a bien été envoyé. Nous vous répondrons dans les plus brefs délais.'
        );
    }
}
