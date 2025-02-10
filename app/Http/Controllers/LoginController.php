<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Login;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah!']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
