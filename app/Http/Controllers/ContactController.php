<?php
// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use App\Mail\ContactConfirmation;
use App\Models\Contact;
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

        $contact = Contact::create($validated);

        try {
            // Email confirmation au visiteur
            Mail::to($contact->email)->send(new ContactConfirmation($contact));

            // Notification interne à ASMEX
            Mail::raw(
                "Nom : {$validated['nom']}\nEmail : {$validated['email']}\nSujet : {$validated['sujet']}\n\nMessage :\n{$validated['message']}",
                function ($mail) use ($validated) {
                    $mail->to('contact@digitalexportforum.ma')
                         ->subject('Contact site ASMEX – ' . $validated['sujet'])
                         ->replyTo($validated['email'], $validated['nom']);
                }
            );
        } catch (\Exception $e) {
            // Silently fail — message saved to DB regardless
        }

        return redirect()->route('contact')->with(
            'success',
            'Votre message a bien été envoyé. Nous vous répondrons dans les plus brefs délais.'
        );
    }
}
