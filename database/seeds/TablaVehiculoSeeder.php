<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Agregar Vehiculo
        DB::table('TBL_Vehiculo')->insert([
            'VHC_Placa_Vehiculo' => 'FUL-346',
            'VHC_Color_Vehiculo' => 'Negro',
            'VHC_Marca_Vehiculo' => 'Hiunday',
            'VHC_Tipo_Vehiculo' => 'Particular',
            'VHC_Propietario_Id' => 1,
            'VHC_Conductor_Id' => 2
        ]);
    }
}
