<?php

use App\Http\Controllers\AsignacionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('asignacions', AsignacionController::class );
