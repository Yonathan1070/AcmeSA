<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
