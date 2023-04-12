<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BDcontrol extends Controller
{
    public function Consultas()
    {
        $asig = DB::table('asignacion')->get();
        

    }
}
