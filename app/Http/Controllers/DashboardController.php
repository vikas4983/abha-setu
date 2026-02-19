<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        if (!$user) {
            return view('welcome');
        }
        if ($user->hasRole('admin')) {
            return view('dashboard');
        }
        return view('welcome');
    }
    public function userDashboard()
    {
        return view('welcome');
    }
}
