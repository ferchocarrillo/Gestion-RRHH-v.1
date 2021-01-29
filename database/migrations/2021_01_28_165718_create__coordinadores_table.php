<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoordinadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_coordinadores', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('id_filtro');
            $table->unsignedBigInteger('cedula');
            $table->string('nombre');
            $table->string('campaña');
            $table->string('foco');
            $table->string('cargo');

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
        Schema::dropIfExists('_coordinadores');
    }
}
