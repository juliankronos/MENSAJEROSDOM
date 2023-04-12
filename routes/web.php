<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Name;


Route::controller(PageController::class)->group(function (){

    Route::get('/home',        'home' )->name('home');
    Route::get('/Asignacion',  'Asignacion' )->name('Asignacion');
    Route::get('/Clientes',    'Clientes' )->name('Clientes');
    Route::get('/Mensajeros',  'Mensajeros' )->name('Mensajeros');
    Route::get('/Consultas',   'Consultas' )->name('Consultas');

});








