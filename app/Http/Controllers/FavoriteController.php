<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FavoriteController extends Controller
{
//     public function store(Request $request)
//     {
//         $validatedData['novel_id'] = $request->novel_id;
//         $validatedData['user_id'] = auth()->user()->id;
//         $existingWishlist = Favorite::where('user_id', $validatedData['user_id'])
//         ->where('novel_id', $validatedData['novel_id'])
//         ->first();
// if ($existingWishlist) {
//     return back()->with('error','Favorite Already Added!');
    
// }
// Favorite::create($validatedData);
//         return back()->with('success','Favorite Added Successfully!');
//     }
public function store(Request $request)
{
    $validatedData = $request->validate([
        'novel_id' => 'required',
    ]);

    $validatedData['user_id'] = Auth()->user()->id;
    
    // cek apakah favorite sudah ada
    $favorite = Favorite::where('user_id', $validatedData['user_id'])
                        ->where('novel_id', $validatedData['novel_id'])
                        ->first();
    
    if ($favorite) {
        // favorite sudah ada
        if ($request->ajax()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Novel already added to favorite!'
            ]);
        }
        return back()->with('error', 'Novel already added to favorite!');
    }
    
    // favorite belum ada
    $favorite = Favorite::create($validatedData);

    if ($request->ajax()) {
        return response()->json([
            'status' => 'success',
            'message' => 'Favorite successfully added!',
            'favorite_id' => $favorite->id
        ]);
    }
    return back()->with('success', 'Favorite successfully added!');
}
public function destroy(Favorite $favorite)
{
    $favorite->delete();
    return back()->with('success','Favorite Deleted Successfully!');
}

}
