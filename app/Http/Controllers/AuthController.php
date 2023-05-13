<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request) {
        $credentials = $request->validated();
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }
        return to_route('auth.login')->with('error', 'Login ou mot de passe Incorrecte')->onlyInput('email');
    }
}
