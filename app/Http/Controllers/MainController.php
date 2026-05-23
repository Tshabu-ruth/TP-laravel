<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController
{
    // === ROUTES PUBLIQUES DU BLOG ===

    // Affichage de la page d'accueil (Design beige avec statistiques)
    public function index() {
        return view('posts.index');
    }

    // Affichage de la liste de tous les articles du blog
    public function articles() {
        return view('posts.articles');
    }

    // Affichage d'un article spécifique (Recherche par le paramètre $slug)
    public function article(string $slug) {
        return view('posts.show', ['post' => $slug]);
    }

    // Affichage de l'espace de filtrage par catégories
    public function categories() {
        return view('posts.categories');
    }

    // Affichage de la page de présentation "À propos"
    public function about() {
        return view('posts.about');
    }
}