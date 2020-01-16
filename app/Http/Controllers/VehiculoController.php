<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Vehiculo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Controlador de Vehiculo
 * @author Yonathan Bohorquez
 * @version 16/01/2020 1.0
 */

class VehiculoController extends Controller
{
    /**
     * Metodo que muestra los datos del vehiculo y los envia a una vista
     *
     * @return Route::view('URI', 'viewName');
     */
    public function inicio()
    {
        $vehiculos = DB::table('TBL_Vehiculo as v')
            ->join('TBL_Persona as pp', 'pp.id', '=', 'v.VHC_Propietario_Id')
            ->join('TBL_Persona as pc', 'pc.id', '=', 'v.VHC_Conductor_Id')
            ->select('v.id as VH_Id', 'v.*',
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
     * Metodo que retorna la vista del formulario de crear vehiculo
     *
     * @return Route::view('URI', 'viewName');
     */
    public function crear()
    {
        $personas = Persona::all();
        $disponibles = Vehiculo::obtenerConductoresDisponibles();
        return view('vehiculos.crear', compact('personas', 'disponibles'));
    }

    /**
     * Metodo que realiza la acción de almacenamiento del vehiculo en la BD
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Route::redirect
     */
    public function guardar(Request $request)
    {
        try {
            Vehiculo::crear($request);
            return redirect()->back()->with('mensaje', 'Vehiculo creado');
        } catch (Exception $ex) {
            return redirect()->back()->withErrors($ex->getMessage())->withInput();
        }
    }

    /**
     * Metodo que retorna el formulario de edición del vehiculo
     *
     * @param  int  $id
     * @return Route::view('URI', 'viewName');
     */
    public function editar($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        $personas = Persona::all();
        $disponibles = Vehiculo::obtenerConductoresDisponiblesSinActual($id);
        return view('vehiculos.editar', compact('vehiculo', 'personas', 'disponibles'));
    }

    /**
     * Metodo que envia los datos a actualizar en la BD
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Route::redirect
     */
    public function actualizar(Request $request, $id)
    {
        try {
            Vehiculo::actualizar($request, $id);
            return redirect()->route('lista_vehiculos')->with('mensaje', 'Vehiculo Actualizado');
        } catch (Exception $ex) {
            return redirect()->back()->withErrors($ex->getMessage())->withInput();
        }
    }

    /**
     * Metodo que visualiza en la pantalla un reporte de datos del vehiculo
     *
     * @return Route::view('URI', 'viewName');
     */
    public function reporte()
    {
        $vehiculos = DB::table('TBL_Vehiculo as v')
            ->join('TBL_Persona as pp', 'pp.id', '=', 'v.VHC_Propietario_Id')
            ->join('TBL_Persona as pc', 'pc.id', '=', 'v.VHC_Conductor_Id')
            ->select('v.id as VH_Id',
                'v.VHC_Placa_Vehiculo',
                'v.VHC_Marca_Vehiculo',
                'pp.PSN_Primer_Nombre_Persona as Primer_Nombre_Propietario',
                'pp.PSN_Segundo_Nombre_Persona as Segundo_Nombre_Propietario',
                'pp.PSN_Apellidos_Persona as Apellidos_Propietario',
                'pc.PSN_Primer_Nombre_Persona as Primer_Nombre_Conductor',
                'pc.PSN_Segundo_Nombre_Persona as Segundo_Nombre_Conductor',
                'pc.PSN_Apellidos_Persona as Apellidos_Conductor')
            ->get();
        return view('vehiculos.reporte', compact('vehiculos'));
    }
}
