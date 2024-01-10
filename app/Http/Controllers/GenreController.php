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
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('dashboard.genre.index', compact('genres'));
    }
    public function create(Request $request){
        $request['admin_id'] = Auth::guard('admin')->user()->id;
        $genre = Genre::create($request->all());
        return back()->with('success', 'Data Berhasil Ditambahkan');
    }
    
    public function delete(Request $request, $id)
    {
        $genre = Genre::find($id);
    
        if ($genre) {
            // Check if the genre has novels
            if ($genre->novels->isEmpty()) {
                $genre->delete();
                return back()->with('success', 'Data Telah Dihapus');
            } else {
                return back()->with('error', 'Genre Memiliki Data Novel, Tidak Bisa Dihapus');
            }
        } else {
            return back()->with('error', 'Genre Tidak Ditemukan');
        }
    }
    
    
    public function update(Request $request, $id){
        $genre = Genre::findorfail($id);
        $genre->update($request->all());
        return back();
    }
}
// <form action="{{ route('delete.genre', $genre->id) }}" method="post" style="display: inline;">
//   @csrf
//   @method('DELETE')
//   <button type="submit" class="btn btn-danger" data-confirm-delete="true" name="id" value="{{ $genre->id }}">
//     <input type="hidden" value="{{ $genre->id }}" name="id">
//       <img data-confirm-delete="true" src="/assets/trash-i.svg" alt="">
//   </button>
// </form>