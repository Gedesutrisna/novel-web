<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class GenreController extends Controller
{
    public function genre(){
        $genres = Genre::all();
        return view('dashboard.genre.index', compact('genres'));
    }
    public function create(Request $request){
        $request['admin_id'] = Auth::guard('admin')->user()->id;
        $genre = Genre::create($request->all());
        return back()->with('success', 'Data Berhasil Ditambahkan');
    }
    
    public function delete($id){

        $genre = Genre::find($id);
        $genre->delete();
        return back()->with('success', 'Data Telah Dihapus');
    }
    
    public function update(Request $request, $id){
        $genre = Genre::findorfail($id);
        $genre->update($request->all());
        return back();
    }
}
