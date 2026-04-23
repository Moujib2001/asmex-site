{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="L'Export à l'Ère du Digital et de l'Intelligence Artificielle – ASMEX, 04 Juin 2026, Four Seasons Hotel Casablanca">
    <meta name="theme-color" content="#1B2B6B">

    <title>@yield('title', 'ASMEX – L\'Export à l\'Ère du Digital et de l\'Intelligence Artificielle 2026')</title>

    {{-- Montserrat local --}}

    {{-- CSS Global + Navbar + Footer --}}
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    {{-- CSS par page --}}
    @stack('styles')
</head>
<body>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    {{-- JS Navbar --}}
    <script src="{{ asset('js/navbar.js') }}" defer></script>

    {{-- JS Global (scroll reveal) --}}
    <script src="{{ asset('js/global.js') }}" defer></script>

    {{-- JS par page --}}
    @stack('scripts')

</body>
</html>
