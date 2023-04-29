<?php

use App\Http\Controllers\AsignacionController;
use App\Http\Controllers\AsignacionV2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('asignacions', AsignacionController::class );
Route::apiResource('asignacionsapi', AsignacionV2::class );
