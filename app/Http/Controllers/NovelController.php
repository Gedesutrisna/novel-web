<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Novel;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Routing\Controller;
use App\Http\Requests\NovelRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NovelController extends Controller
{
    public function novel(){
        $novels = Novel::all();
        $genres = Genre::all();
        return view('dashboard.novel.index', compact('novels', 'genres'));
    }
    public function show(Novel $novel)
    {
        // $novel = Novel::find($id);
        return view('dashboard.novel.show', compact('novel'),[
            'novel'=> $novel
        ]);
    }

    public function create(NovelRequest $request){

        $valdatedData= $request->validated();
    
        $valdatedData['admin_id'] = Auth::guard('admin')->user()->id;
        
        if($request->file('image')){
            $valdatedData['image'] = $request->file('image')->store('novel');
        }
        
        $novels = Novel::create($valdatedData);
        $genres = Genre::all();
      
    

        return back()->with('success', 'Data Berhasil Ditambahkan')
        ;
    }

    public function delete($id){

        $novels = Novel::find($id);
        $novels->delete();
        return back()->with('success', 'Data Telah Dihapus');
    }

    public function update(Request $request, $id){
        
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'year_published' => 'required',
            'creator' => 'required',
            'genre_id' => 'required',
            'image' => 'image|mimes:jpg,png'
        ]);
        
        $novels = Novel::findorfail($id);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('novel');
            if($novels->image){
                Storage::delete($novels->image);
            }
        }
        $post =[
            'title' => $request['title'],
            'slug' => $request['slug'],
            'description' => $request['description'],
            'creator' => $request['creator'],
            'year_published' => $request['year_published'],
            'admin_id' => Auth::guard('admin')->user()->id,
            'genre_id' => $request['genre_id'],
            'image' =>  $validatedData['image'],
        ];
       
        $novels->update($post);
        return back();
    }
   
}
