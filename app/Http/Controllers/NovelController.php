<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NovelController extends Controller
{
    public function novel(){
        return view('dashboard.novel.index');
    }
}
