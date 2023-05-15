<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{    
    /**
     * view login
     *
     * @return void
     */
    public function login() {
        return view('auth.login');
    }
    
    /**
     * authentification d'utulisateur
     *
     * @param  mixed $request
     * @return void
     */
    public function postLogin(LoginRequest $request) {
        $credentials = $request->validated();
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('adminstar.index'));
        }
        return to_route('auth.login')->with('error', 'Login ou mot de passe Incorrecte')->onlyInput('email');
    }
    
    /**
     * logout
     *
     * @return void
     */
    public function logout() {
        Auth::logout();
        return to_route('home')->with('success', 'Vous ete bien deconnectée');
    }
}
