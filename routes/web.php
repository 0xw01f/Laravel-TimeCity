<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'pages/home')->name('home');

Route::view('/about-me', 'pages/about')->name('about');