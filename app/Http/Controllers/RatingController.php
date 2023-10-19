<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\RatingRequest;

class RatingController extends Controller
{
    public function store(RatingRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['user_id'] = auth()->user()->id;
        Rating::create($validatedData);
        return back()->with('success','Reply Added Successfully!');
    }
}
