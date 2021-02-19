<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrevista3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrevista3s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_filtro');
            $table->bigInteger('cedula')->unsigned();
            $table->string('nombres');
            $table->bigInteger('telefono')->unsigned();
            $table->string('correo');
            $table->string('Grado1')->nullable();
            $table->string('institucion1')->nullable();
            $table->string('años1')->nullable();
            $table->date('fecha1')->nullable();
            $table->string('titulo1')->nullable();
            $table->string('estado1')->nullable();
            $table->string('Grado2')->nullable();
            $table->string('institucion2')->nullable();
            $table->string('años2')->nullable();
            $table->date('fecha2')->nullable();
            $table->string('titulo2')->nullable();
            $table->string('estado2')->nullable();
            $table->string('Grado3')->nullable();
            $table->string('institucion3')->nullable();
            $table->string('años3')->nullable();
            $table->date('fecha3')->nullable();
            $table->string('titulo3')->nullable();
            $table->string('estado3')->nullable();
            $table->string('Grado4')->nullable();
            $table->string('institucion4')->nullable();
            $table->string('años4')->nullable();
            $table->date('fecha4')->nullable();
            $table->string('titulo4')->nullable();
            $table->string('estado4')->nullable();
            $table->string('Grado5')->nullable();
            $table->string('institucion5')->nullable();
            $table->string('años5')->nullable();
            $table->date('fecha5')->nullable();
            $table->string('titulo5')->nullable();
            $table->string('estado5')->nullable();
            $table->string('Grado6')->nullable();
            $table->string('institucion6')->nullable();
            $table->string('años6')->nullable();
            $table->date('fecha6')->nullable();
            $table->string('titulo6')->nullable();
            $table->string('estado6')->nullable();
            $table->string('Grado7')->nullable();
            $table->string('institucion7')->nullable();
            $table->string('años7')->nullable();
            $table->date('fecha7')->nullable();
            $table->string('titulo7')->nullable();
            $table->string('estado7')->nullable();
            $table->string('Grado8')->nullable();
            $table->string('institucion8')->nullable();
            $table->string('años8')->nullable();
            $table->date('fecha8')->nullable();
            $table->string('titulo8')->nullable();
            $table->string('estado8')->nullable();
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
        Schema::dropIfExists('entrevista3s');
    }
}
