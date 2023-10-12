<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Novel;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class NovelController extends Controller
{
    public function novel(){
        $novels = Novel::all();
        $genres = Genre:: all();
        return view('dashboard.novel.index', compact('novels', 'genres'));
    }
    public function show(Novel $novel)
    {
        return view('dashboard.novel.show',[
            'novel' => $novel,
        ]);
    }

    public function create(Request $request){
        $request['admin_id'] = Auth::guard('admin')->user()->id;
        $novels = Novel::create($request->all());
        $genres = Genre::all();
      

        if($request->hasFile('image')){
            $request->file('image')->move('storage/', $request->file('image')->getClientOriginalName());
            $novels->image = $request->file('image')->getClientOriginalName();
            $novels->save();
        }
        
    

        return back()->with('success', 'Data Berhasil Ditambahkan');
    }

    public function delete($id){

        $novels = Novel::find($id);
        $novels->delete();
        return back()->with('success', 'Data Telah Dihapus');
    }

    public function update(Request $request, $id){
        $novels = Novel::findorfail($id);
        $data = $request->file('image') ? $request->file('image')->store('novel') : $novels->image;

        $post =[
            'title' => $request['title'],
            'slug' => $request['slug'],
            'description' => $request['description'],
            'creator' => $request['creator'],
            'year_published' => $request['year_published'],
            'admin_id' => Auth::guard('admin')->user()->id,
            'genre_id' => $request['genre_id'],
            'image' => $data,
        ];
        
        $novels->update($post);
        return back();
    }
   
}
