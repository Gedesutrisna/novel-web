<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();
        if(Auth::guard('admin')->attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard')->with('success', 'Login Successfuly');
        }
        return redirect()->intended('/dashboard')->with('success', 'Login Failed');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function store(RegisterRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        return back()->with('success','Register Successfuly');
    }
}
