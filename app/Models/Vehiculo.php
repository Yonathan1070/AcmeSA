<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

    public static function crear(){

    }

    public static function actualizar(){

    }

    public static function eliminar(){
        
    }
}
