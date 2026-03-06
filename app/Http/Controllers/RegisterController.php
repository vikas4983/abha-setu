<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        if (!auth()->check()) {
            return 'register';
        }
        return 'User Dashboard';
    }
}
