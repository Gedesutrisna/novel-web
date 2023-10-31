<?php

namespace App\Http\Controllers\user;

use App\Http\Requests\NovelRequest;
use App\Models\Genre;
use App\Models\Novel;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class NovelController extends Controller
{
    public function index(){
        $novels = Novel::all();
        $genres = Genre:: all();
        return view('novel.index', compact('novels', 'genres'));
    }
    public function show(Novel $novel)
    {
        return view('novel.show',[
            'novel'=> $novel
        ]);
    }
}