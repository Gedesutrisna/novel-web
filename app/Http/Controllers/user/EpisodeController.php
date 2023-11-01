<?php

namespace App\Http\Controllers\user;

use App\Models\Genre;
use App\Models\Novel;
use App\Models\Episode;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class EpisodeController extends Controller
{
    public function show(Novel $novel, Episode $episode){
        return view('episode.index',[
            'novel' => $novel,
            'episode' => $episode,
        ]);
    }
}
