<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // Question 6 : Méthodes de la partie publique
    public function index() { return view('public.index')->with('title', 'Accueil'); }
    public function articles() { return view('public.articles')->with('posts', []); }
    public function article($slug) { return view('public.article')->with('slug', $slug); }
    public function categories() { return view('public.categories')->with('categories', []); }
    public function about() { return view('public.about')->with('page', 'À propos'); }
}
