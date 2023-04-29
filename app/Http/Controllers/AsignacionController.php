<?php

namespace App\Http\Controllers;

use App\Models\asignacions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsignacionController extends Controller
{

    public function index()
    {
        return DB::select('SELECT MENSAJERO,  COUNT(*) as Cant_Asignaciones FROM asignacions GROUP BY MENSAJERO ORDER BY Cant_Asignaciones DESC LIMIT 1');

    }

}
