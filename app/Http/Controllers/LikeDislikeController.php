<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DislikeLikeReview;
use Illuminate\Routing\Controller;

class LikeDislikeController extends Controller
{
    public function like(Request $request)
    {
        $validatedData['review_id'] = $request->review_id;
        $validatedData['like'] = $request->like;
        $validatedData['user_id'] = auth()->user()->id;
        $existingWishlist = DislikeLikeReview::where('user_id', $validatedData['user_id'])
        ->where('review_id', $validatedData['review_id'])
        ->first();
if ($existingWishlist) {
    return back()->with('error','LikeLikeReview Already Added!');
    
}
DislikeLikeReview::create($validatedData);
        return back()->with('success','LikeLikeReview Added Successfully!');
    }
    public function dislike(Request $request)
    {
        $validatedData['review_id'] = $request->review_id;
        $validatedData['dislike'] = $request->dislike;
        $validatedData['user_id'] = auth()->user()->id;
        $existingWishlist = DislikeLikeReview::where('user_id', $validatedData['user_id'])
        ->where('review_id', $validatedData['review_id'])
        ->first();
if ($existingWishlist) {
    return back()->with('error','DislikeLikeReview Already Added!');
    
}
DislikeLikeReview::create($validatedData);
        return back()->with('success','DislikeLikeReview Added Successfully!');
    }
}
