{{-- resources/views/emails/contact-confirmation.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de votre message – ASMEX</title>
    <style>
        body { margin: 0; padding: 0; font-family: 'Segoe UI', Arial, sans-serif; background: #F4F6FB; color: #4A5568; }
        .wrapper { max-width: 600px; margin: 40px auto; background: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 24px rgba(27,43,107,0.1); }
        .header { background: linear-gradient(135deg, #0F1C4D 0%, #1B2B6B 100%); padding: 40px 40px 32px; text-align: center; }
        .header-icon { font-size: 3rem; margin-bottom: 12px; display: block; }
        .header-title { font-size: 1.5rem; font-weight: 700; color: #ffffff; margin: 0 0 8px; letter-spacing: -0.02em; }
        .header-sub { font-size: 0.85rem; color: rgba(255,255,255,0.65); margin: 0; }
        .body { padding: 36px 40px; }
        .greeting { font-size: 1rem; color: #1B2B6B; font-weight: 600; margin-bottom: 16px; }
        .text { font-size: 0.9rem; color: #4A5568; line-height: 1.7; margin-bottom: 16px; }
        .recap-title { font-size: 0.78rem; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; color: #00AEEF; margin-bottom: 12px; margin-top: 28px; }
        .recap-table { width: 100%; border-collapse: collapse; background: #F4F6FB; border-radius: 8px; overflow: hidden; margin-bottom: 24px; }
        .recap-table td { padding: 12px 16px; font-size: 0.875rem; border-bottom: 1px solid rgba(27,43,107,0.05); }
        .recap-table td:first-child { font-weight: 600; color: #1B2B6B; width: 35%; }
        .recap-table tr:last-child td { border-bottom: none; }
        .message-block { background: #F4F6FB; border-left: 3px solid #00AEEF; border-radius: 0 8px 8px 0; padding: 16px 20px; margin: 20px 0; font-size: 0.88rem; color: #4A5568; line-height: 1.7; }
        .footer-email { background: #F4F6FB; padding: 24px 40px; text-align: center; font-size: 0.78rem; color: #a0aec0; border-top: 1px solid rgba(27,43,107,0.06); }
        .footer-email a { color: #1B2B6B; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <span class="header-icon">✉️</span>
            <h1 class="header-title">Message bien reçu</h1>
            <p class="header-sub">L'Export à l'Ère du Digital et de l'Intelligence Artificielle</p>
        </div>

        <div class="body">
            <p class="greeting">Bonjour {{ $contact->nom }},</p>
            <p class="text">
                Nous avons bien reçu votre message concernant l'événement ASMEX <strong>« L'Export à l'Ère du Digital et de l'Intelligence Artificielle »</strong>.
                Notre équipe vous répondra dans les plus brefs délais, généralement sous 24h ouvrées.
            </p>

            <p class="recap-title">Récapitulatif de votre demande</p>
            <table class="recap-table">
                <tr><td>Nom</td><td>{{ $contact->nom }}</td></tr>
                <tr><td>Email</td><td>{{ $contact->email }}</td></tr>
                <tr><td>Sujet</td><td>{{ $contact->sujet }}</td></tr>
            </table>

            <p class="recap-title">Votre message</p>
            <div class="message-block">{{ $contact->message }}</div>

            <p class="text">
                Pour toute urgence, vous pouvez contacter directement notre équipe :<br>
                <strong>Mme Hind LAHSINIA</strong> — <a href="tel:+212661324503">+212 6 61 32 45 03</a> — <a href="mailto:contact@digitalexportforum.ma">contact@digitalexportforum.ma</a>
            </p>

            <p class="text"><strong>L'équipe ASMEX</strong></p>
        </div>

        <div class="footer-email">
            ASMEX – Confédération Marocaine des Exportateurs<br>
            Cet email est automatique, merci de ne pas y répondre directement.<br>
            Contact : <a href="mailto:contact@digitalexportforum.ma">contact@digitalexportforum.ma</a>
        </div>
    </div>
</body>
</html>
