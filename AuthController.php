<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request){
    User::create($request->all());
    return redirect()->route("auth.login")->with("message","Register berhasil! Silahkan Login.");
    }

    public function login(Request $request){
    User::create($request->all());
    return redirect()->route("auth.dashboard");
    }

    public function dashboard(Request $request){
    return redirect()->route("auth.dashboard");
    }
}
