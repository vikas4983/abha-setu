<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        return view('frontends.home');
    }

    public function books(){
        return "Books list";
    }
    public function medicine(){
        return "Medicine list";
    }
    public function aboutUs(){
        return "About us";
    }
    public function update(){
        return "News";
    }
    public function practitioner(){
        return "Practitioner";
    }
    public function contact(){
        return "Contact";
    }
}
