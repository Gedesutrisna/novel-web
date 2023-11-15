<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Novel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $novels = Novel::all();
        $genres = Genre::all();
        return view('index',compact('novels','genres'));
    }
}
