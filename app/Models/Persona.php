<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Persona extends Model
{
    protected $table = "TBL_Persona";
    protected $fillable = ['PSN_Numero_Cedula_Persona', 
        'PSN_Primer_Nombre_Persona',
        'PSN_Segundo_Nombre_Persona',
        'PSN_Apellidos_Persona',
        'PSN_Direccion_Residencia_Persona',
        'PSN_Telefono_Persona',
        'PSN_Ciudad_Persona'];
    protected $guarded = ['id'];

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

    public static function buscar($id){
        return Persona::findOrFail($id);
    }

    public static function actualizar($request, $id){
        try {
            Persona::findOrFail($id)->update($request->all());
        } catch (\Throwable $th) {
            throw new Exception("No se pudo actualizar la persona!");
        }
    }
}
