<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Agregar Personas
        DB::table('TBL_Persona')->insert([
            'PSN_Numero_Cedula_Persona' => '80393256',
            'PSN_Primer_Nombre_Persona' => 'Jose',
            'PSN_Segundo_Nombre_Persona' => 'Alirio',
            'PSN_Apellidos_Persona' => 'Mendez Moncada',
            'PSN_Direccion_Residencia_Persona' => 'Calle 5 # 13-18',
            'PSN_Telefono_Persona' => '3108799688',
            'PSN_Ciudad_Persona' => 'Facatativá'
        ]);
        DB::table('TBL_Persona')->insert([
            'PSN_Numero_Cedula_Persona' => '1070979976',
            'PSN_Primer_Nombre_Persona' => 'Yonathan',
            'PSN_Segundo_Nombre_Persona' => 'Camilo',
            'PSN_Apellidos_Persona' => 'Bohorquez Rincon',
            'PSN_Direccion_Residencia_Persona' => 'Calle 4c # 13-18',
            'PSN_Telefono_Persona' => '3102144993',
            'PSN_Ciudad_Persona' => 'Facatativá'
        ]);
    }
}
