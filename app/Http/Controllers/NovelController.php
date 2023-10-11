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

    public function create(Request $request){
        $novels = Novel::create($request->all());
        $genres = Genre::all();
      

        if($request->hasFile('image')){
            $request->file('image')->move('novel/', $request->file('image')->getClientOriginalName());
            $novels->image = $request->file('image')->getClientOriginalName();
            $novels->save();
        }
        
    

        return back()->with('berhasil', 'Data Berhasil Ditambahkan');
    }

    public function delete($id){

        $novels = Novel::find($id);
        $novels->delete();
        return back()->with('hapus', 'Data Telah Dihapus');
    }

    public function update(Request $request, $id){
        $novels = Novel::findorfail($id);
        $data = $novels->image;

        $post =[
            'title' => $request['title'],
            'slug' => $request['slug'],
            'description' => $request['description'],
            'creator' => $request['creator'],
            'year_published' => $request['year_published'],
            'admin_id' => $request['admin_id'],
            'genre_id' => $request['genre_id'],
        ];

        $request->image->move(public_path() . '/novel' , $data);
        $data->update($post);
        return back();
    }
   
}
