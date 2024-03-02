<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard.dashboard');
});


Route::get('/research', function () {
    return view('admin.research.research');
});

Route::get('/registration', function () {
    return view('admin.registration.registration');
});

Route::get('/profile', function () {
    return view('admin.profile.profile');
});

Route::get('/data-mngt', function () {
    return view('admin.data-mngt.data-mngt');
});