<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function Asignacion()
    {
        return view('Asignacion');
    }

    public function Clientes()
    {
        return view('Clientes');
    }

    public function Mensajeros()
    {
        return view('Mensajeros');
    }

    public function Consultas()
    {
        $asigs = [
            [ ]

        ];

        $asigs = DB::table('asignacion')->get();
        return view('Consultas', [ 'asigs' => $asigs]);
    }
}
