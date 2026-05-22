<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Question 6 : Méthodes du dashboard
    public function index() { return view('dashboard.index')->with('stats', []); }
    public function articles() { return view('dashboard.articles')->with('posts', []); }
    public function categories() { return view('dashboard.categories')->with('categories', []); }
    public function users() { return view('dashboard.users')->with('users', []); }
    public function comments() { return view('dashboard.comments')->with('comments', []); }
    public function settings() { return view('dashboard.settings')->with('config', []); }
}
