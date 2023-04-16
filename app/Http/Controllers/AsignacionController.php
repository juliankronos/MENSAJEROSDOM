<?php

namespace App\Http\Controllers;

use App\Models\asignacions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsignacionController extends Controller
{

    public function index()
    {
        return asignacions::all();
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(asignacions $asignacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, asignacions $asignacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(asignacions $asignacion)
    {
        //
    }
}
