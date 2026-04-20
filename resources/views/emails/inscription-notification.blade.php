{{-- resources/views/emails/inscription-notification.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle inscription – ASMEX Export Digital IA 2026</title>
    <style>
        body { margin: 0; padding: 0; font-family: 'Segoe UI', Arial, sans-serif; background: #F4F6FB; color: #4A5568; }
        .wrapper { max-width: 600px; margin: 40px auto; background: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 24px rgba(27,43,107,0.1); }
        .header { background: linear-gradient(135deg, #0F1C4D 0%, #1B2B6B 100%); padding: 36px 40px 28px; }
        .header-title { font-size: 1.3rem; font-weight: 700; color: #ffffff; margin: 0 0 6px; }
        .header-sub { font-size: 0.82rem; color: rgba(255,255,255,0.6); margin: 0; }
        .badge { display: inline-block; background: #E63329; color: #fff; font-size: 0.72rem; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; padding: 4px 10px; border-radius: 100px; margin-bottom: 12px; }
        .body { padding: 36px 40px; }
        .info-text { font-size: 0.88rem; color: #4A5568; margin-bottom: 24px; line-height: 1.6; }
        .data-table { width: 100%; border-collapse: collapse; font-size: 0.875rem; }
        .data-table th { text-align: left; background: #1B2B6B; color: #ffffff; padding: 10px 16px; font-weight: 600; font-size: 0.78rem; letter-spacing: 0.06em; text-transform: uppercase; }
        .data-table td { padding: 12px 16px; border-bottom: 1px solid rgba(27,43,107,0.06); }
        .data-table td:first-child { font-weight: 600; color: #1B2B6B; width: 38%; background: #F4F6FB; }
        .data-table tr:last-child td { border-bottom: none; }
        .type-badge { display: inline-block; padding: 3px 10px; border-radius: 100px; font-size: 0.75rem; font-weight: 700; background: rgba(0,174,239,0.1); color: #00AEEF; }
        .meta-block { margin-top: 24px; padding: 16px 20px; background: #F4F6FB; border-radius: 8px; border-left: 3px solid #00AEEF; font-size: 0.82rem; color: #4A5568; }
        .footer-email { background: #F4F6FB; padding: 20px 40px; text-align: center; font-size: 0.78rem; color: #a0aec0; border-top: 1px solid rgba(27,43,107,0.06); }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <span class="badge">Nouvelle inscription</span>
            <h1 class="header-title">🔔 Nouvelle Inscription reçue</h1>
            <p class="header-sub">ASMEX – Export Digital à l'Ère de l'IA 2026</p>
        </div>

        <div class="body">
            <p class="info-text">
                Une nouvelle inscription vient d'être enregistrée sur le site de l'événement.
                Voici les informations du participant :
            </p>

            <table class="data-table">
                <thead>
                    <tr><th colspan="2">Données du participant</th></tr>
                </thead>
                <tbody>
                    <tr><td>Prénom</td><td>{{ $inscription->prenom }}</td></tr>
                    <tr><td>Nom</td><td>{{ $inscription->nom }}</td></tr>
                    <tr><td>Email</td><td>{{ $inscription->email }}</td></tr>
                    <tr><td>Téléphone</td><td>{{ $inscription->telephone ?? '—' }}</td></tr>
                    <tr><td>Société</td><td>{{ $inscription->societe }}</td></tr>
                    <tr><td>Fonction</td><td>{{ $inscription->fonction }}</td></tr>
                    <tr>
                        <td>Type</td>
                        <td><span class="type-badge">{{ $inscription->type }}</span></td>
                    </tr>
                    <tr><td>Message</td><td>{{ $inscription->message ?? '—' }}</td></tr>
                </tbody>
            </table>

            <div class="meta-block">
                <strong>Date et heure de réception :</strong>
                {{ $inscription->created_at ? $inscription->created_at->format('d/m/Y à H:i:s') : now()->format('d/m/Y à H:i:s') }}
            </div>
        </div>

        <div class="footer-email">
            Notification automatique – Site ASMEX Export Digital IA 2026<br>
            Accessible via le back-office de l'événement
        </div>
    </div>
</body>
</html>
