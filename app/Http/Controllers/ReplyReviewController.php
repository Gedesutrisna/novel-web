<?php

namespace App\Http\Controllers;

use App\Models\ReplyReview;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\ReplyReviewRequest;

class ReplyReviewController extends Controller
{
    public function store(ReplyReviewRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['user_id'] = auth()->user()->id;
        ReplyReview::create($validatedData);
        return back()->with('success','Reply Added Successfully!');
    }
}
