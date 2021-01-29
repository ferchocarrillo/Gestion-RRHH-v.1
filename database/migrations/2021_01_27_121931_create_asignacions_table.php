<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('asignacions');
        Schema::create('asignacions', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('id_filtro');
            $table->unsignedBigInteger('cedula');
            $table->string('nombres');
            $table->date('fecha');
            $table->string('cargo');
            $table->string('area');
            $table->string('campaña');
            $table->string('foco');
            $table->string('jinmedato');
            $table->string('novedades');
            $table->string('observaciones');
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
        Schema::dropIfExists('asignacions');
    }
}
