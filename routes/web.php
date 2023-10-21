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
Route::get("/", function () {
    return view('home');
});

Route::get('/{id}', function ($id) {
    if ($id === 'profile') {
        return view('profile');
    } elseif ($id === 'mycv') {
        return view('mycv');
    } elseif ($id === 'portfolio') {
        return view('portfolio');
    } else {
        return view('home');
    }
});