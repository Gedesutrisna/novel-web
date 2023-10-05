<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();
        if(Auth::user()->attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success','Login Successfuly');
        }
        return back()->with('error','Login Failed');
    }
}
