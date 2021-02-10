<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntFinalizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::dropIfExists('ent_finalizacions');
        Schema::create('ent_finalizacions', function (Blueprint $table) {
                $table->id();
                $table->integer('id_filtro');
                $table->bigInteger('cedula')->unsigned();
                $table->string('nombre');
                $table->string('resultado');
                $table->string('resultadoGer');
                $table->longText('obsGerencia');
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
        Schema::dropIfExists('ent_finalizacions');
    }
}
