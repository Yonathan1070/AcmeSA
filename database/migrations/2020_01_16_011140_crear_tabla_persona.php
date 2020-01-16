<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CrearTablaPersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TBL_Persona', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('PSN_Numero_Cedula_Persona', 15);
            $table->string('PSN_Primer_Nombre_Persona', 25);
            $table->string('PSN_Segundo_Nombre_Persona', 25)->nullable();
            $table->string('PSN_Apellidos_Persona', 50);
            $table->string('PSN_Direccion_Residencia_Persona', 100);
            $table->string('PSN_Telefono_Persona', 15);
            $table->string('PSN_Ciudad_Persona', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        Schema::dropIfExists('TBL_Persona');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
