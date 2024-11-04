<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Novel;
use App\Models\Episode;
use Illuminate\Support\Str;
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
      

        if($request->file('image')){
            
            $filename = time() . '-' . Str::random(10) . '.' . $request->image->getClientOriginalExtension();
            
            $request->image->move("uploads/eps", $filename);
            $valdatedData['image'] = $filename;
        }
        if($request->file('file_pdf')){
            
            $filename = time() . '-' . Str::random(10) . '.' . $request->file_pdf->getClientOriginalExtension();
            
            $request->file_pdf->move("uploads/eps", $filename);
            $valdatedData['file_pdf'] = $filename;
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
        $request['image'] = $eps->image;
        if($request->file('image')){
            
            $filename = time() . '-' . Str::random(10) . '.' . $request->image->getClientOriginalExtension();
            
            $request->image->move("uploads/novel", $filename);
            $request['image'] = $filename;
        }
        $request['file_pdf'] = $eps->file_pdf;
        if($request->file('file_pdf')){
            
            $filename = time() . '-' . Str::random(10) . '.' . $request->file_pdf->getClientOriginalExtension();
            
            $request->file_pdf->move("uploads/novel", $filename);
            $request['file_pdf'] = $filename;
        }
        $post =[
            'name' => $request['name'],
            'number' => $request['number'],
            'admin_id' => Auth::guard('admin')->user()->id,
            'file_pdf' => $request['file_pdf'],
            'image' => $request['image'],
        ];
        
      
        $eps->update($post);
        return back()->with('update', 'Data Berhasil Di Update');
    }

}
