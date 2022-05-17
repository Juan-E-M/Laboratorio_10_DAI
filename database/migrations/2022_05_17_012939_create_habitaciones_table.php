<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cat_hab');
            $table->foreign('id_cat_hab')->references('id')->on('categoria_habitaciones');
            $table->integer('capacidad');
            $table->string('descripcion');
            $table->string('estado');
            $table->unsignedBigInteger('id_hot');
            $table->foreign('id_hot')->references('id')->on('hotel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitaciones');
    }
}
