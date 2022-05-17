<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobiliarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobiliario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_hab');
            $table->unsignedBigInteger('id_det_mob');
            $table->foreign('id_hab')->references('id')->on('habitaciones');
            $table->foreign('id_det_mob')->references('id')->on('detalle_mobiliario');
            $table->integer('cantidad');
            $table->string('descripcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobiliario');
    }
}
