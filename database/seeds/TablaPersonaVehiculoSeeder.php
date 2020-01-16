<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaPersonaVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Asignar Vehiculo a propietario
        DB::table('TBL_Persona_Vehiculo')->insert([
            'PSN_VHC_Persona_Id' => 1,
            'PSN_VHC_Vehiculo_Id' => 1,
            'PSN_VHC_Rol' => 'Propietario'
        ]);

        // Asignar vehiculo a conductor
        DB::table('TBL_Persona_Vehiculo')->insert([
            'PSN_VHC_Persona_Id' => 2,
            'PSN_VHC_Vehiculo_Id' => 1,
            'PSN_VHC_Rol' => 'Conductor'
        ]);
    }
}
