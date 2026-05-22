<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') — Le Blog</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>

    @include('components.dashboard.sidebar')

    <div class="main">
        @include('components.dashboard.topbar')

        <div class="content">
            @yield('content')
        </div>
    </div>

</body>

</html>
