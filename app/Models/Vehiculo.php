<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = "TBL_Persona";
    protected $fillable = ['VHC_Placa_Vehiculo', 
        'VHC_Color_Vehiculo',
        'VHC_Marca_Vehiculo',
        'VHC_Tipo_Vehiculo'];
    protected $guarded = ['id'];
}
