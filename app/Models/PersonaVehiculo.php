<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonaVehiculo extends Model
{
    protected $table = "TBL_Persona_Vehiculo";
    protected $fillable = ['PSN_VHC_Persona_Id',
        'PSN_VHC_Vehiculo_Id',
        'PSN_VHC_Rol'];
    protected $guarded = ['id'];
}
