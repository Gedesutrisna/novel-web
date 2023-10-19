<?php

namespace App\Http\Controllers;

use App\Models\Novel;
use App\Models\Episode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $novels = Novel::all();
        $episodes = Episode::all();
        $users = User::all();
        return view('dashboard.index',compact('novels', 'episodes','users'));
    }
}
