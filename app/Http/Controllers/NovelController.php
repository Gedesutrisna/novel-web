<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Novel;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Routing\Controller;

class NovelController extends Controller
{
    public function novel(){
        $novels = Novel::all();
        $genres = Genre:: all();
        return view('dashboard.novel.index', compact('novels', 'genres'));
    }

    public function createdata(Request $request){
        $novels = Novel::create($request->all());
      

        if($request->hasFile('image')){
            $request->file('image')->move('novel/', $request->file('image')->getClientOriginalName());
            $novels->gambar = $request->file('image')->getClientOriginalName();
            $novels->save();
        }
        
        dd($request);

        return redirect('novel')->with('berhasil', 'Data Berhasil Ditambahkan');
    }

    public function delete($id){
        $novels = Novel::find($id);
        $novels->delete();
        return redirect('dashborad.novel.index');
    }
    
   
}
