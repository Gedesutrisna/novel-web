<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Novel;
use App\Models\Episode;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class EpisodeController extends Controller
{
    public function create(Request $request)
    {

        $validated = $request->validate([
            "name"=> "required",
            "number"=> "required",
            "image"=> "required|image|mimes:jpg,png",
            "file_pdf"=> "required|file|mimes:pdf",
        ]);
        // dd($request);
        $request['admin_id'] = Auth::guard('admin')->user()->id;
        $eps = Episode::create($request->all());
      

        if($request->hasFile('image')){
            $request->file('image')->move('storage/', $request->file('image')->getClientOriginalName());
            $eps->image = $request->file('image')->getClientOriginalName();
            $eps->save();
        }

        if($request->hasFile('file_pdf')){
            $request->file('file_pdf')->move('file_novel/', $request->file('file_pdf')->getClientOriginalName());
            $eps->file_pdf = $request->file('file_pdf')->getClientOriginalName();
            $eps->save();
        }
        
     
    

        return back()->with('success', 'Data Berhasil Ditambahkan');
    }

    public function delete($id)
    {
        $eps = Episode::find($id);
        $eps->delete();
        return back()->with('delete', 'Data Berhasil Dihapus');
    }

    public function update(Request $request, $id)
    {
        $eps = Episode::findorfail($id);
        $data = $request->file('image') ? $request->file('image')->store('novel') : $eps->image;
        $file = $request->file('file_pdf') ? $request->file('file_pdf')->store('file_novel') : $eps->file_pdf;

        $post =[
            'name' => $request['name'],
            'number' => $request['number'],
            'admin_id' => Auth::guard('admin')->user()->id,
            'file_pdf' => $file,
            'image' => $data,
        ];
        
      
        $eps->update($post);
        return back()->with('update', 'Data Berhasil Di Update');
    }

}
