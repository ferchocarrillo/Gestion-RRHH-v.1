<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiltrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filtros', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fregistro');
            $table->string('nombre');
            $table->bigInteger('cedula');
            $table->bigInteger('telefono');
            $table->string('correo');
            $table->string('perfil');
            $table->string('campaña');
            $table->string('fuente');
            $table->string('citadoE')->nullable();
            $table->string('noAplica')->nullable();
            $table->string('noInteresado')->nullable();
            $table->string('enviadoCapa')->nullable();
            $table->string('enviadoExm')->nullable();
            $table->string('PruebasE')->nullable();
            $table->string('yaTrabaja')->nullable();
            $table->string('numeroEqu')->nullable();
            $table->longText('observacion')->nullable();
            $table->string('noAsiste')->nullable();
            $table->string('NoResponde2')->nullable();
            $table->string('YaNoInt')->nullable();
            $table->string('Estudiante')->nullable();
            $table->string('noAsisteEnt')->nullable();
            $table->string('entrevistaJefeInm')->nullable();
            $table->string('entrevistaGerencia')->nullable();
            $table->string('enviadocontratacion')->nullable();
            $table->longText('observacion2')->nullable();
            $table->string('entvOK')->nullable();
            $table->string('resultadoRrhh')->nullable();
            $table->longText('obsRrhh')->nullable();
            $table->date('fechaRrhh')->nullable();
            $table->string('resultadoGer')->nullable();
            $table->longText('obsGerencia')->nullable();
            $table->date('fechaGerencia')->nullable();
            $table->string('resultadoJefe')->nullable();
            $table->longText('obsJefe')->nullable();
            $table->date('fechaJefe')->nullable();
            $table->string('resultadoFormacion')->nullable();
            $table->longText('obsFormacion')->nullable();
            $table->date('fechaFormacion')->nullable();



            $table->date('fechaCont')->nullable();
            $table->string('usuario');
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
        Schema::dropIfExists('filtros');
    }
}
