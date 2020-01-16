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

class Persona extends Model
{
    /**
     * Declaración del nonmbre de la tabla y las columnas de la misma
     */
    protected $table = "TBL_Persona";
    protected $fillable = ['PSN_Numero_Cedula_Persona', 
        'PSN_Primer_Nombre_Persona',
        'PSN_Segundo_Nombre_Persona',
        'PSN_Apellidos_Persona',
        'PSN_Direccion_Residencia_Persona',
        'PSN_Telefono_Persona',
        'PSN_Ciudad_Persona'];
    protected $guarded = ['id'];

    /**
     * Metodo para el almacenamiento en la BD
     */
    public static function crear($request){
        $persona = Persona::where('PSN_Numero_Cedula_Persona', $request->PSN_Numero_Cedula_Persona)->get();
        if(count($persona) > 0){
            throw new Exception("La persona ya se encuentra registrada");
        }
        try {
            DB::table('TBL_Persona')->insert([
                'PSN_Numero_Cedula_Persona' => $request->PSN_Numero_Cedula_Persona,
                'PSN_Primer_Nombre_Persona' => $request->PSN_Primer_Nombre_Persona,
                'PSN_Segundo_Nombre_Persona' => $request->PSN_Segundo_Nombre_Persona,
                'PSN_Apellidos_Persona' => $request->PSN_Apellidos_Persona,
                'PSN_Direccion_Residencia_Persona' => $request->PSN_Direccion_Residencia_Persona,
                'PSN_Telefono_Persona' => $request->PSN_Telefono_Persona,
                'PSN_Ciudad_Persona' => $request->PSN_Ciudad_Persona
            ]);
        } catch (\Throwable $th) {
            throw new Exception("No se pudo registrar la persona!");
        }
    }

    /**
     * Metodo para buscar un registro específico
     *
     * @param  int  $id
     * @return Persona
     */
    public static function buscar($id){
        return Persona::findOrFail($id);
    }

    /**
     * Metodo para actualizar el registro de la persona
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request  $request
     */
    public static function actualizar($request, $id){
        try {
            Persona::findOrFail($id)->update($request->all());
        } catch (\Throwable $th) {
            throw new Exception("No se pudo actualizar la persona!");
        }
    }
}
