<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function register() {
        return view('auth.register');
    }
    
    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }
}
