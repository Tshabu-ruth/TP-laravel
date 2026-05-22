<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mon Blog')</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    @include('components.header')
    <main>
        @yield('content')
    </main>
    @include('components.footer')
</body>
</html>
