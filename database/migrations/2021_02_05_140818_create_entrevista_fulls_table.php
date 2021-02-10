<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrevistaFullsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrevista_fulls', function (Blueprint $table) {
            $table->id();
            $table->integer('id_filtro');
            $table->bigInteger('cedula')->unsigned();
            $table->string('nombre');
            $table->date('fechaCont');
            $table->string('resultadoRrhh');
            $table->longText('obsRrhh');
            $table->string('resultadoGer');
            $table->longText('obsGerencia');
            $table->string('resultadoJefe');
            $table->longText('obsJefe');
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
        Schema::dropIfExists('entrevista_fulls');
    }
}
