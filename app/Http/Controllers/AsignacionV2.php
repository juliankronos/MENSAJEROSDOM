<?php

namespace App\Http\Controllers;

use App\Models\asignacions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsignacionV2 extends Controller
{
    public function index()
    {
        return DB::select('SELECT VEHICULO,  COUNT(*) as Cant_Vehiculo FROM asignacions GROUP BY VEHICULO ORDER BY Cant_Vehiculo DESC');

    }
}
