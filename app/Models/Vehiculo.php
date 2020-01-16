<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Modelo de Persona
 * @author Yonathan Bohorquez
 * @version 16/01/2020 1.0
 */

class Vehiculo extends Model
{
    /**
     * Declaración del nonmbre de la tabla y las columnas de la misma
     */
    protected $table = "TBL_Vehiculo";
    protected $fillable = ['VHC_Placa_Vehiculo', 
        'VHC_Color_Vehiculo',
        'VHC_Marca_Vehiculo',
        'VHC_Tipo_Vehiculo',
        'VHC_Propietario_Id',
        'VHC_Conductor_Id'];
    protected $guarded = ['id'];

    /**
     * Metodo para filtrar conductores para crear un nuevo vehiculo
     *
     * @return Persona $disponibles
     */
    public static function obtenerConductoresDisponibles(){
        $conductores = Persona::all();
        $ocupados = DB::table('TBL_Persona as p')
            ->join('TBL_Vehiculo as v', 'v.VHC_Conductor_Id', '=', 'p.id')
            ->select('p.id')
            ->get();
        $disponibles = [];
        foreach ($conductores as $conductor) {
            if(!$ocupados->contains('id', $conductor->id)){
                array_push($disponibles, $conductor);
            }
        }
        return $disponibles;
    }

    /**
     * Metodo para filtrar conductores disponibles para actualizar los datos del vehiculo
     *
     * @param  int  $id
     * @return Persona $disponibles
     */
    public static function obtenerConductoresDisponiblesSinActual($id){
        $conductores = Persona::all();
        $ocupados = DB::table('TBL_Persona as p')
            ->join('TBL_Vehiculo as v', 'v.VHC_Conductor_Id', '=', 'p.id')
            ->where('v.id', '<>', $id)
            ->select('p.id')
            ->get();
        $disponibles = [];
        foreach ($conductores as $conductor) {
            if(!$ocupados->contains('id', $conductor->id)){
                array_push($disponibles, $conductor);
            }
        }
        return $disponibles;
    }

    /**
     * Metodo para crear un nuevo vehiculo
     *
     * @param \Illuminate\Http\Request  $request
     */
    public static function crear($request){
        $vehiculo = Vehiculo::where('VHC_Placa_Vehiculo', $request->VHC_Placa_Vehiculo)->get();
        if(count($vehiculo) > 0){
            throw new Exception("El Vehiculo ya se encuentra registrado");
        }
        try {
            DB::table('TBL_Vehiculo')->insert([
                'VHC_Placa_Vehiculo' => $request->VHC_Placa_Vehiculo,
                'VHC_Color_Vehiculo' => $request->VHC_Color_Vehiculo,
                'VHC_Marca_Vehiculo' => $request->VHC_Marca_Vehiculo,
                'VHC_Tipo_Vehiculo' => $request->VHC_Tipo_Vehiculo,
                'VHC_Propietario_Id' => $request->VHC_Propietario_Id,
                'VHC_Conductor_Id' => $request->VHC_Conductor_Id
            ]);
        } catch (\Throwable $th) {
            throw new Exception("No se pudo registrar el vehiculo!");
        }
    }

    /**
     * Metodo para actualizar el registro del vehiculo
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request  $request
     */
    public static function actualizar($request, $id){
        try {
            Vehiculo::findOrFail($id)->update($request->all());
        } catch (\Throwable $th) {
            throw new Exception("No se pudo actualizar el vehiculo!");
        }
    }
}
