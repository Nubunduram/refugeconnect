<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <!-- CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>



    <main>
        @include('partials.header')
        @yield('content')
    </main>

    @include('partials.footer')

</body>

</html>