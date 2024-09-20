<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function signIn(){
        // dd('here');
        return view('auth.sign-in');
    }
    Public function signUp(){
        return view('auth.sign-up');
    }
}
