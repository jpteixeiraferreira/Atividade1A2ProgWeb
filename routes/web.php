<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/portfolio-details', function(){
    return view('portfolio-details');
})->name('portfolio-details');

Route::get('/service-details', function(){
    return view('service-details');
})->name('service-details');
