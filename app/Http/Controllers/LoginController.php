<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;

class LoginController extends Controller
{
    public function register(){
        if(Auth::user()){
            return view('index');
        }
        return view('auth.index');
    }
    public function index()
    {
        if(Auth::check()){
            return view('index');
        }
        return view('auth.index');
    }
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return back()->with('toast_success', 'Login Successfuly');
        }
        return back()->with('toast_error', 'Login Failed');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
    public function store(RegisterRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        return back()->with('toast_success','Register Successfuly');
    }
    
    protected function authenticated(Request $request, $user)
    {
        if ($user instanceof User) {
            return redirect()->route('/');
        } elseif ($user instanceof Admin) {
            return redirect()->route('/dashboard');
        }

        // Default redirection
        return redirect('/');
    }
}
