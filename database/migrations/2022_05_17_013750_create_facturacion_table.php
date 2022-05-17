<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturacion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usr');
            $table->unsignedBigInteger('id_reg_serv');
            $table->foreign('id_usr')->references('id')->on('users');
            $table->foreign('id_reg_serv')->references('id')->on('registro_uso_servicios');
            $table->date('fecha');
            $table->string('tipo_de_pago');
            $table->double('descuento');
            $table->double('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturacion');
    }
}
