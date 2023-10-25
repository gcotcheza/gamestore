<?php

namespace App\Http\Controllers;

use App\Models\Game;

class HomeController extends Controller
{
    public function index()
    {
        dd(Game::with(['developers', 'publisher', 'genres', 'modes', 'platforms'])->orderBy('created_at')->get());

        return view('index');
    }
}
