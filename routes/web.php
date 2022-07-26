<?php

use Illuminate\Support\Facades\Route;

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

//get login route
Route::get('/', function () {
    return view('login');
});

//post login route
Route::post('/login', [UserController::class, 'login'])->name('login_user');
