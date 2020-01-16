<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Vehiculo extends Model
{
    protected $table = "TBL_Vehiculo";
    protected $fillable = ['VHC_Placa_Vehiculo', 
        'VHC_Color_Vehiculo',
        'VHC_Marca_Vehiculo',
        'VHC_Tipo_Vehiculo',
        'VHC_Propietario_Id',
        'VHC_Conductor_Id'];
    protected $guarded = ['id'];

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

    public static function actualizar($request, $id){
        try {
            Vehiculo::findOrFail($id)->update($request->all());
        } catch (\Throwable $th) {
            throw new Exception("No se pudo actualizar el vehiculo!");
        }
    }

    public static function eliminar(){
        
    }
}
