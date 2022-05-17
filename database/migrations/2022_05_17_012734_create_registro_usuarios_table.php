<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('DNI');
            $table->string('dirección');
            $table->string('telefono');
            $table->string('email');
            $table->unsignedBigInteger('id_usr');
            $table->unsignedBigInteger('id_cat_usr');
            $table->foreign('id_usr')->references('id')->on('users');
            $table->foreign('id_cat_usr')->references('id')->on('categoria_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_usuarios');
    }
}
