<?php

namespace App\Http\Controllers;

use App\incidencia;
use Illuminate\Http\Request;


class IncidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        /*$incidencias = incidencia::orderBy('id', 'DESC')->paginate(5);
        $incidencias->each(function($incidencias){
          $incidencias->id;
          $incidencias->reportador_id;
          $incidencias->fecha;
          $incidencias->descripcion;
        });
        return $incidencias;*/

        $incidencias = incidencia::all();

        return response()->json([
          'incidencias' => $incidencias
        ]);

    }

    public function seleccionIncidencia(incidencia $incidencia)
    {
        $incidencias = incidencia::orderBy('id', 'DESC')->paginate(5);
        return $incidencias;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function edit(incidencia $incidencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, incidencia $incidencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(incidencia $incidencia)
    {
        //
    }
}
