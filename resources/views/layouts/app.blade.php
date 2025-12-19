<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">

    <!-- CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>

</html>