<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntfinalizacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('entfinalizacion');
        Schema::create('entfinalizacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_filtro');
            $table->bigInteger('cedula')->unsigned();
            $table->string('nombre');
            $table->string('resultado');
            $table->longText('obsFinales');
            $table->string('resultadoGer');
            $table->longText('obsGerencia');
            $table->string('resultadoJefe');
            $table->longText('obsJefe');
            $table->date('fechaCont');
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
        Schema::dropIfExists('entfinalizacion');
    }
}
