<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNovedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novedades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_filtro');
            $table->string('nombres');
            $table->unsignedBigInteger('cedula');
            $table->string('campaña');
            $table->string('foco');
            $table->string('cargo');
            $table->string('supervisor');
            $table->string('estado');
            $table->string('novedad');
            $table->longText('observaciones');
            $table->date('desde');
            $table->date('hasta');
            $table->integer('totalDias');
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
        Schema::dropIfExists('novedades');
    }
}
