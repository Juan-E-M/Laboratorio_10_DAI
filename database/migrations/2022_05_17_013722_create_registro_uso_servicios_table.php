<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroUsoServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_uso_servicios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_srv');
            $table->unsignedBigInteger('id_reg_usr');
            $table->unsignedBigInteger('id_emp');
            $table->unsignedBigInteger('id_hab');
            $table->foreign('id_srv')->references('id')->on('servicios');
            $table->foreign('id_reg_usr')->references('id')->on('registro_usuarios');
            $table->foreign('id_emp')->references('id')->on('empleados');
            $table->foreign('id_hab')->references('id')->on('habitaciones');
            $table->date('fecha_solicitud');
            $table->date('fech_desde');
            $table->date('fecha_hasta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_uso_servicios');
    }
}
