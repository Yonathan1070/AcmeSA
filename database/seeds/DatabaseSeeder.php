<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTablas([
            'TBL_Persona',
            'TBL_Vehiculo',
            'TBL_Persona_Vehiculo'
        ]);
        $this->call(TablaPersonaSeeder::class);
        $this->call(TablaVehiculoSeeder::class);
        $this->call(TablaPersonaVehiculoSeeder::class);
    }
    protected function truncateTablas(array $tablas){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach($tablas as $tabla){
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
