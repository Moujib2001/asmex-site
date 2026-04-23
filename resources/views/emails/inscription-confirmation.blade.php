{{-- resources/views/emails/inscription-confirmation.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation d'inscription – ASMEX Export à l'Ère du Digital et de l'IA 2026</title>
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
        .recap-table td:first-child { font-weight: 600; color: #1B2B6B; width: 40%; }
        .recap-table tr:last-child td { border-bottom: none; }
        .event-block { background: linear-gradient(135deg, #1B2B6B 0%, #243580 100%); border-radius: 10px; padding: 24px 28px; margin: 24px 0; }
        .event-block-title { font-size: 1rem; font-weight: 700; color: #ffffff; margin-bottom: 16px; }
        .event-item { display: flex; align-items: flex-start; gap: 10px; margin-bottom: 10px; font-size: 0.85rem; color: rgba(255,255,255,0.8); }
        .event-icon { font-size: 1rem; flex-shrink: 0; }
        .cta-btn { display: block; width: fit-content; margin: 24px auto; background: #E63329; color: #ffffff; text-decoration: none; padding: 14px 32px; border-radius: 6px; font-weight: 700; font-size: 0.95rem; text-align: center; }
        .footer-email { background: #F4F6FB; padding: 24px 40px; text-align: center; font-size: 0.78rem; color: #a0aec0; border-top: 1px solid rgba(27,43,107,0.06); }
        .footer-email a { color: #1B2B6B; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <span class="header-icon">✅</span>
            <h1 class="header-title">Inscription Confirmée</h1>
            <p class="header-sub">L'Export à l'Ère du Digital et de l'Intelligence Artificielle</p>
        </div>

        <div class="body">
            <p class="greeting">Bonjour {{ $inscription->prenom }} {{ $inscription->nom }},</p>
            <p class="text">
                Nous avons bien reçu votre inscription à l'événement <strong>« L'Export à l'Ère du Digital et de l'Intelligence Artificielle »</strong> organisé par ASMEX.
                Votre participation est confirmée et nous sommes ravis de vous compter parmi nous.
            </p>

            <p class="recap-title">Récapitulatif de votre inscription</p>
            <table class="recap-table">
                <tr><td>Nom complet</td><td>{{ $inscription->prenom }} {{ $inscription->nom }}</td></tr>
                <tr><td>Email</td><td>{{ $inscription->email }}</td></tr>
                @if($inscription->telephone)
                <tr><td>Téléphone</td><td>{{ $inscription->telephone }}</td></tr>
                @endif
                <tr><td>Société</td><td>{{ $inscription->societe }}</td></tr>
                <tr><td>Fonction</td><td>{{ $inscription->fonction }}</td></tr>
                <tr><td>Type de participation</td><td>{{ $inscription->type }}</td></tr>
            </table>

            <div class="event-block">
                <p class="event-block-title">Informations sur l'événement</p>
                <div class="event-item"><span class="event-icon">📅</span><span>Jeudi 04 Juin 2026</span></div>
                <div class="event-item"><span class="event-icon">⏰</span><span>08h30 – 17h00</span></div>
                <div class="event-item"><span class="event-icon">📍</span><span>Four Seasons Hotel, Casablanca</span></div>
                <div class="event-item"><span class="event-icon">👥</span><span>200–300 participants attendus</span></div>
            </div>

            <p class="text">
                Pour toute question, n'hésitez pas à contacter notre équipe :<br>
                <strong>Mme Hind LAHSINIA</strong> — <a href="tel:+212661324503">+212 6 61 32 45 03</a> — <a href="mailto:h.lahsinia@asmex.org">h.lahsinia@asmex.org</a>
            </p>

            <p class="text">Nous vous souhaitons une excellente journée et nous réjouissons de vous accueillir le 04 Juin 2026.</p>

            <p class="text"><strong>L'équipe ASMEX</strong></p>
        </div>

        <div class="footer-email">
            ASMEX – Confédération Marocaine des Exportateurs<br>
            Cet email est automatique, merci de ne pas y répondre directement.<br>
            Contact : <a href="mailto:h.lahsinia@asmex.org">h.lahsinia@asmex.org</a>
        </div>
    </div>
</body>
</html>
