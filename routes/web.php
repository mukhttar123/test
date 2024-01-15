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
Route::get('/', function() {
    return view('lalala');
});

Route::get('/umar', function() {
    return view('umar');
});

Route::get('/portofolio', function(){
    return view('portofolio');
});

Route::get('/sekolah-miskin', function(){
    return view('sekolah-miskin');
});
