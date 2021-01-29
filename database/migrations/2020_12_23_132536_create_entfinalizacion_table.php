<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntFinalizacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entfinalizacion', function (Blueprint $table) {
            $table->id();
            $table->integer('id_filtro');
            $table->bigInteger('cedula')->unsigned();
            $table->string('nombre');
            $table->string('resultado');
            $table->string('resultadoGer');
            $table->string('resultadoJefe');
            $table->date('fechaCont');
            $table->longText('obsFinales');

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
