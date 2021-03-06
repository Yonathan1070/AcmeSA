<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CrearTablaVehiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TBL_Vehiculo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('VHC_Placa_Vehiculo', 10);
            $table->string('VHC_Color_Vehiculo', 10);
            $table->string('VHC_Marca_Vehiculo', 25);
            $table->string('VHC_Tipo_Vehiculo', 10);
            $table->unsignedBigInteger('VHC_Propietario_Id');
            $table->foreign('VHC_Propietario_Id', 'FK_Vehiculo_Propietario_Id')->references('id')->on('TBL_Persona')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('VHC_Conductor_Id');
            $table->foreign('VHC_Conductor_Id', 'FK_Vehiculo_Conductor_Id')->references('id')->on('TBL_Persona')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('TBL_Vehiculo');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
