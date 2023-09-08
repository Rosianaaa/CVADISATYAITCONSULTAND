<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $auth = Auth::attempt($credentials);
        if (auth()->user()->role == 0) {
            return redirect('/beranda');
        } elseif (auth()->user()->role == 1) {
            return redirect('/admin');
        }
        return redirect('/login');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}