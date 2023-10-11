<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GenreController extends Controller
{
    public function genre(){
        $genres = Genre::all();
        $genres = Genre::all();
        return view('dashboard.genre.index', compact('genres', 'genres'));
    }
}
