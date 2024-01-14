<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function index(){
        return view('profile.index');
    }
    public function edit(){
        return view('profile.edit');
    }
    public function update(ProfileRequest $request, User $user)
    {
        $validatedData = $request->validated();
        $validatedData['id'] = auth()->user()->id;
        auth()->user()->update($validatedData);
        return back()->with('toast_success','Profile Update Successfully!');
    }
}
