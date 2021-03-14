<?php

use Illuminate\Support\Facades\Route;

Route::name('home')->get('/', function () {
    return view('pages/home');
});

 Route::name('about')->get('/about-me', function () {
     return view('pages/about');
 });

 Route::name('help')->get('/help', function() {
     return view('pages/help');
 });