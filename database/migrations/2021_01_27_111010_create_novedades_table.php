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
            $table->unsignedBigInteger('cedula');
            $table->string('nombres');
            $table->date('fecha');
            $table->string('campaña');
            $table->string('area');
            $table->string('cargo');
            $table->string('jinmediato');
            $table->string('novedad');
            $table->longText('observaciones');
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
