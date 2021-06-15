<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
     public function register(Request $request){
     return view("register");
    }

    public function login(Request $request){
    return view("login");
    }

    public function dashboard(Request $request){
    return view("dashboard");
    }
}
