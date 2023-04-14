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

    public function Clientes(Request $request)
    {

        $cedu = $request->input('Cedulasa');
        $nomb = $request->input('Nombresa');
        $apel = $request->input('Apellidosa');
        $tel  = $request->input('Telefonos');
        $age  = $request->input('Edades');

        DB::insert('insert into clientes (Ced, Clinombres, Cliapellidos, Clitelefono, Cliedad) values (?, ?, ?, ?, ?)' , [$cedu, $nomb, $apel, $tel, $age]);

        return view('Clientes');
    }

    public function Mensajeros(Request $request)
    {
        $ced = $request->input('CedulasM');
        $nom = $request->input('NombresM');

        DB::insert('INSERT INTO mensajeros (MENced, MENnombre) VALUES (?, ?)', [$ced, $nom]);

        return view('Mensajeros');
    }

    public function Consultas()
    {
        $asigs = [ ];

        $asigs = DB::table('asignacion')->get();
        return view('Consultas', [ 'asigs' => $asigs]);
    }

    public function Usuarios(Request $request)
    {

        $ceed  = $request->input('Cedulas');
        $noom  = $request->input('Nombrescom');
        $apell = $request->input('Apellidoscom');
        $carg  = $request->input('Cargos');
        $nick  = $request->input('nick');
        $pass  = $request->input('Password');

        DB::insert('insert into usuarios (USid, USnombres, USapellidos, UScargo, USnick, USpassword) values (?, ?, ?, ?, ?, ?)', [$ceed, $noom, $apell, $carg, $nick, $pass]);

        return view('Usuarios');
    }

}
