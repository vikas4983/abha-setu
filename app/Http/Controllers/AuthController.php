<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }
}
