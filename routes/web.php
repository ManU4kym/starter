<?php

use Illuminate\Support\Facades\Route;
/* main route .. */

Route::get('/', function (){
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function (){
    return view('contact');
});
