<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CrearTablaPersonaVehiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TBL_Persona_Vehiculo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('PSN_VHC_Persona_Id');
            $table->foreign('PSN_VHC_Persona_Id', 'FK_Persona_Vehiculo_Persona_Id')->references('id')->on('TBL_Persona')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('PSN_VHC_Vehiculo_Id');
            $table->foreign('PSN_VHC_Vehiculo_Id', 'FK_Persona_Vehiculo_Vehiculo_Id')->references('id')->on('TBL_Vehiculo')->onDelete('restrict')->onUpdate('restrict');
            $table->string('PSN_VHC_Rol', 30);
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
        Schema::dropIfExists('TBL_Persona_Vehiculo');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
