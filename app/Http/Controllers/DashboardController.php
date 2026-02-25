<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        if (!$user->hasRole('admin')) {
            return redirect()->route('user.dasboard');
        }
       return redirect()->route('admin.dashboard');
    }
    public function userDashboard()
    {
        return view('welcome');
    }
    public function adminDashboard()
    {
        return view('dashboard');
    }
    
}
