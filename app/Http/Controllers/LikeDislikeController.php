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
        $existingLikeDislike = DislikeLikeReview::where('user_id', $validatedData['user_id'])
        ->where('review_id', $validatedData['review_id'])
        ->first();
        if ($existingLikeDislike) {
    DislikeLikeReview::destroy($existingLikeDislike->id);
    DislikeLikeReview::create($validatedData);
    return back();
    
}
DislikeLikeReview::create($validatedData);
        return back();
    }

    public function dislike(Request $request)
    {
        $likedislike = 
        $validatedData['review_id'] = $request->review_id;
        $validatedData['dislike'] = $request->dislike;
        $validatedData['user_id'] = auth()->user()->id;
        $existingLikeDislike = DislikeLikeReview::where('user_id', $validatedData['user_id'])
        ->where('review_id', $validatedData['review_id'])
        ->first();
if ($existingLikeDislike) {
    DislikeLikeReview::destroy($existingLikeDislike->id);
    DislikeLikeReview::create($validatedData);
    return back();
    
}
DislikeLikeReview::create($validatedData);
        return back();
    }



//     public function like(Request $request)
// {
//     $validatedData = $request->validate([
//         'review_id' => 'required',
//     ]);

//     $validatedData['user_id'] = Auth()->user()->id;
    
//     // cek apakah likedislike sudah ada
//     $likedislike = DislikeLikeReview::where('user_id', $validatedData['user_id'])
//                         ->where('review_id', $validatedData['review_id'])
//                         ->first();
    
//     if ($likedislike) {
//         // likedislike sudah ada
//         // if ($request->ajax()) {
//         //     return response()->json([
//         //         'status' => 'error',
//         //         'message' => 'Novel already added to likedislike!'
//         //     ]);
//         // }
//         DislikeLikeReview::destroy($likedislike->id);
//         return back();
//     }
    
//     // likedislike belum ada
//     $likedislike = DislikeLikeReview::create($validatedData);

//     if ($request->ajax()) {
//         return response()->json([
//             'status' => 'success',
//             'message' => 'LikeReview successfully added!',
//             'favorite_id' => $likedislike->id
//         ]);
//     }
//     return back();
// }
// public function dislike(Request $request)
// {
//     $validatedData = $request->validate([
//         'review_id' => 'required',
//     ]);

//     $validatedData['user_id'] = Auth()->user()->id;
    
//     // cek apakah likedislike sudah ada
//     $likedislike = DislikeLikeReview::where('user_id', $validatedData['user_id'])
//                         ->where('review_id', $validatedData['review_id'])
//                         ->first();
    
//     if ($likedislike) {
//         // likedislike sudah ada
//         // if ($request->ajax()) {
//         //     return response()->json([
//         //         'status' => 'error',
//         //         'message' => 'Novel already added to likedislike!'
//         //     ]);
//         // }
//         DislikeLikeReview::destroy($likedislike->id);
//         return back();
//     }
    
//     // likedislike belum ada
//     $likedislike = DislikeLikeReview::create($validatedData);

//     if ($request->ajax()) {
//         return response()->json([
//             'status' => 'success',
//             'message' => 'Dislike Review successfully added!',
//             'favorite_id' => $likedislike->id
//         ]);
//     }
//     return back();
// }
}
