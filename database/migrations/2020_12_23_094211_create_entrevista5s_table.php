<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrevista5sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrevista5s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_filtro');
            $table->bigInteger('cedula')->unsigned();
            $table->string('nombres');
            $table->bigInteger('telefono')->unsigned();
            $table->string('correo');
            $table->string('aspiracion');
            $table->string('personasC');
            $table->string('acCambio');
            $table->string('tiempoDes');
            $table->string('queHizo');
            $table->string('otroProceso');
            $table->string('CualOtra')->nullable();
            $table->string('fortalezas');
            $table->string('debilidades');
            $table->string('valores');
            $table->string('satisfaccion');
            $table->string('traumaticos');
            $table->string('cancelado');
            $table->string('motivoC')->nullable();
            $table->string('problemas');
            $table->string('motivoJ')->nullable();
            $table->string('fuma');
            $table->string('frecuencia')->nullable();
            $table->string('deudas');
            $table->string('debeA')->nullable();
            $table->string('cuantoDebe')->nullable();
            $table->string('plazo')->nullable();
            $table->string('grupoSoc');
            $table->string('cualGr')->nullable();
            $table->string('cuantoTiempo')->nullable();
            $table->string('tiempoLibre');
            $table->string('estadoSalud');
            $table->string('tratamiento');
            $table->string('accidentes');
            $table->string('cualAc')->nullable();
            $table->string('procesosAnt');
            $table->string('familiaresMent');

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
        Schema::dropIfExists('entrevista5s');
    }
}
