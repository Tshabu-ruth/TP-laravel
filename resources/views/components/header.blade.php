<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos — Le Blog</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=DM+Sans:wght@300;400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <nav>
        {{-- Lien vers la route 'home' (/) --}}
        <a href="{{ route('home') }}" class="nav-logo">@yield('title', 'Le Blog')</a>
        
        <ul class="nav-links">
            {{-- Utilisation de la fonction route() avec le nom de vos routes dans web.php --}}
            <li><a href="{{ route('home') }}">Accueil</a></li>
            <li><a href="{{ route('articles.index') }}/Sabin">Articles</a></li>
            <li><a href="{{ route('categories.index') }}">Catégories</a></li>
            <li><a href="{{ route('about') }}" class="active">À propos</a></li>
            
            {{-- Le dashboard (espace d'administration) --}}
            <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
        </ul>
    </nav>