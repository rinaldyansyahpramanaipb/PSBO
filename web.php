<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', [PageController::class, "login"]);

Route::get('/register', [PageController::class, "register"]);

Route::get('/dashboard', [PageController::class, "dashboard"]);


//Route::get('/dashboard', function () {
//    return view('welcome');
//}
//);

Route::post('/login', [AuthController::class, "login"])->name("auth.login");
Route::post('/register', [AuthController::class, "register"])->name("auth.register");
Route::post('/dashboard', [AuthController::class, "dashboard"])->name("auth.dashboard");
