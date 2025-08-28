<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('contato.inicio');

Route::get('/sobre', function () {
    return view('sobre');
})->name('contato.form.novo');

Route::post('/sobre', function() {    
    echo 'Realizar cadastro do contato';
})->name('contato.novo');

Route::get('/listar', function () {
    return view('listar');
})->name('contato.listagem');

