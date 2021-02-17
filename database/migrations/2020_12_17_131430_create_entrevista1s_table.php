<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrevista1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrevista1s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_filtro')->unsigned();
            $table->bigInteger('cedula');
            $table->string('nombres');
            $table->bigInteger('telefono')->unsigned();
            $table->string('correo');
            $table->string('cargo');
            $table->string('referencia')->nullable();
            $table->date('fnacimiento');
            $table->string('departamento');
            $table->string('id_ciudad');
            $table->tinyInteger('edad');
            $table->string('TipoVia');
            $table->string('dr1');
            $table->string('prefijo1')->nullable();
            $table->string('dr2');
            $table->string('prefijo2')->nullable();
            $table->string('dr3');
            $table->string('orientacion')->nullable();
            $table->string('adicional')->nullable();
            $table->string('ad1')->nullable();
            $table->string('adicional2')->nullable();
            $table->string('ad2')->nullable();
            $table->string('adicional3')->nullable();
            $table->string('ad3')->nullable();
            $table->string('barrio');
            $table->string('residencia');
            $table->string('id_localidad');
            $table->bigInteger('tFijo')->nullable();
            $table->bigInteger('tCelular')->unsigned();
            $table->bigInteger('tCelular2')->nullable()->unsigned();
            $table->string('tVivienda');
            $table->integer('valor')->nullable()->unsigned();
            $table->string('arrendador')->nullable();
            $table->string('correoArr')->nullable();
            $table->string('sMilitar');
            $table->string('donde')->nullable();
            $table->string('eCivil');
            $table->string('cuanto')->nullable();
            $table->string('quien')->nullable();
            $table->string('conoce')->nullable();
            $table->string('entvOK');
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
        Schema::dropIfExists('entrevista1s');
    }
}
