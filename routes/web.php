<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('home.index');
    return view('home.layouts.wrapper');
});
