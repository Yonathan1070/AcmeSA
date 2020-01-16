<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inicio()
    {
        $vehiculos = DB::table('TBL_Vehiculo as v')
            ->join('TBL_Persona as pp', 'pp.id', '=', 'v.VHC_Propietario_Id')
            ->join('TBL_Persona as pc', 'pc.id', '=', 'v.VHC_Conductor_Id')
            ->select('v.VHC_Placa_Vehiculo',
                'v.VHC_Marca_Vehiculo',
                'pp.PSN_Primer_Nombre_Persona as Primer_Nombre_Propietario',
                'pp.PSN_Segundo_Nombre_Persona as Segundo_Nombre_Propietario',
                'pp.PSN_Apellidos_Persona as Apellidos_Propietario',
                'pc.PSN_Primer_Nombre_Persona as Primer_Nombre_Conductor',
                'pc.PSN_Segundo_Nombre_Persona as Segundo_Nombre_Conductor',
                'pc.PSN_Apellidos_Persona as Apellidos_Conductor')
            ->get();
        return view('vehiculos.inicio', compact('vehiculos'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
