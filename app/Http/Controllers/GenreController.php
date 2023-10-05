<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreGenreRequest;
use App\Http\Requests\UpdateGenreRequest;
use Illuminate\Support\Facades\Auth;

class GenreController extends Controller
{
    public function index()
    {
        return view('dashboard.genre.index');
    }
    public function store(StoreGenreRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['admin_id'] = Auth::guard('admin')->user()->id(); 
        Genre::create($validatedData);
    }
    public function update(UpdateGenreRequest $request, Genre $genre)
    {
        $validatedData = $request->validated();
        $validatedData['admin_id'] = Auth::guard('admin')->user()->id(); 
        Genre::updated($validatedData);
    }
    public function destroy(Genre $genre)
    {
        $genre->delete();
        return back()->with('success');
    }
}
