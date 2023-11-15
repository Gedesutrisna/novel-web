<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FavoriteController extends Controller
{
    public function store(Request $request)
    {
        $validatedData['novel_id'] = $request->novel_id;
        $validatedData['user_id'] = auth()->user()->id;
        $existingWishlist = Favorite::where('user_id', $validatedData['user_id'])
        ->where('novel_id', $validatedData['novel_id'])
        ->first();
if ($existingWishlist) {
    return back()->with('error','Favorite Already Added!');
    
}
Favorite::create($validatedData);
        return back()->with('success','Favorite Added Successfully!');
    }
}
