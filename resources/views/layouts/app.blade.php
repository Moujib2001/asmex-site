<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="L'Export a l'Ere du Digital - ASMEX 2026 Casablanca">
<meta name="robots" content="index, follow">
<meta name="google-site-verification" content="Fq1sCMdaCQaL0WdFKrW2JZLhKDXWAj8vmnXf4mdMwYY">
<meta name="theme-color" content="#1B2B6B">
<title>@yield('title', 'ASMEX 2026')</title>
<link rel="icon" type="image/x-icon" href="{{ asset('imges/favicon_io/favicon.ico') }}">
<link rel="stylesheet" href="{{ asset('css/global.css') }}">
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
@stack('styles')
</head>
<body>
@include('partials.navbar')
<main>
@yield('content')
</main>
@include('partials.footer')
<script src="{{ asset('js/navbar.js') }}" defer></script>
<script src="{{ asset('js/global.js') }}" defer></script>
@stack('scripts')
</body>
</html>