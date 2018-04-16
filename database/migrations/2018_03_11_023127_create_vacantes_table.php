<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacantes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_publicacion');
            $table->integer('cargo_id')->unsigned();
            $table->integer('sucursal_id')->unsigned();
            $table->enum('estatus', ['activa', 'inactiva'])->default('activa');
            $table->foreign('cargo_id')->references('cargo_id')->on('cargos');
            $table->foreign('sucursal_id')->references('sucursal_id')->on('sucursales');
        
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
        Schema::dropIfExists('vacantes');
    }
}
