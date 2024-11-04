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
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string',
            'email' => 'nullable|string',
            'password' => 'nullable|string',
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['id'] = auth()->user()->id;

        auth()->user()->update($validatedData);
        return back()->with('success','Profile Update Successfully!');
    }
}
