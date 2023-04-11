<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Name;



Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/Asignacion', function () {
    return view('Asignacion');
})->name('Asignacion');

Route::get('/Clientes', function () {
    return view('Clientes');
})->name('Clientes');

Route::get('/Mensajeros', function () {
    return view('Mensajeros');
})->name('Mensajeros');

Route::get('/Consultas', function () {
    return view('Consultas');
})->name('Consultas');
