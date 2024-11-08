<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Novel;
use Illuminate\Support\Str;
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
            
            $filename = time() . '-' . Str::random(10) . '.' . $request->image->getClientOriginalExtension();
            
            $request->image->move("uploads/novel", $filename);
            $valdatedData['image'] = $filename;
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

        $data = $request->file('image');
        $filename = $novels->image;
        if($data){
        $filename = time() . '-' . Str::random(10) . '.' . $request->image->getClientOriginalExtension();
        $request->image->move("uploads/novel", $filename);
        }

        $post =[
            'title' => $request['title'],
            'slug' => $request['slug'],
            'description' => $request['description'],
            'creator' => $request['creator'],
            'year_published' => $request['year_published'],
            'admin_id' => Auth::guard('admin')->user()->id,
            'genre_id' => $request['genre_id'],
            'image' =>  $filename,
        ];
       
        $novels->update($post);
        return back();
    }
   
}
