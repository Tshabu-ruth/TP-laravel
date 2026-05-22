<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    @include('components.dashboard.sidebar')
    @include('components.dashboard.topbar')
    <main>
        @yield('content')
    </main>
</body>
</html>
