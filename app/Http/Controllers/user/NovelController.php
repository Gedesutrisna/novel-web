<?php

namespace App\Http\Controllers\user;

use App\Models\Genre;
use App\Models\Novel;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Routing\Controller;
use App\Http\Requests\NovelRequest;
use Illuminate\Support\Facades\Auth;
use Cviebrock\EloquentSluggable\Services\SlugService;

class NovelController extends Controller
{
    public function index(){
        // $novels = Novel::all();
        $novels = Novel::with(['genre'])->latest()->filter(request(['genre']))->Paginate(6)->withQueryString();

        // $novels = Novel::all()->take(6);
        $genres = Genre:: all();
        return view('novel.index', compact('novels', 'genres'));
    }
    public function show(Novel $novel)
    {
        $novels = Novel::all()->take(9);
        return view('novel.show',compact('novels'),[
            'novel' => $novel,
        ]);
    }
}