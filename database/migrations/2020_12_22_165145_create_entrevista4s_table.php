<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrevista4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrevista4s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_filtro');
            $table->bigInteger('cedula');
            $table->string('nombres');
            $table->bigInteger('telefono');
            $table->string('correo');
            $table->string('empresa1');
            $table->date('fechain1');
            $table->date('fechart1');
            $table->integer('tiempo1');
            $table->string('hlcargo1');
            $table->string('jefeinm1');
            $table->bigInteger('teleinf1');
            $table->string('salarioh1');
            $table->string('motivor1');
            $table->string('empresa2');
            $table->date('fechain2');
            $table->date('fechart2');
            $table->integer('tiempo2');
            $table->string('hlcargo2');
            $table->string('jefeinm2');
            $table->bigInteger('teleinf2');
            $table->string('salarioh2');
            $table->string('motivor2');
            $table->string('empresa3');
            $table->date('fechain3');
            $table->date('fechart3');
            $table->integer('tiempo3');
            $table->string('hlcargo3');
            $table->string('jefeinm3');
            $table->bigInteger('teleinf3');
            $table->string('salarioh3');
            $table->string('motivor3');
            $table->string('empresa4')->nullable();
            $table->date('fechain4')->nullable();
            $table->date('fechart4')->nullable();
            $table->integer('tiempo4')->nullable();
            $table->string('hlcargo4')->nullable();
            $table->string('jefeinm4')->nullable();
            $table->bigInteger('teleinf4')->nullable();
            $table->string('salarioh4')->nullable();
            $table->string('motivor4')->nullable();
            $table->string('empresa5')->nullable();
            $table->date('fechain5')->nullable();
            $table->date('fechart5')->nullable();
            $table->integer('tiempo5')->nullable();
            $table->string('hlcargo5')->nullable();
            $table->string('jefeinm5')->nullable();
            $table->bigInteger('teleinf5')->nullable();
            $table->string('salarioh5')->nullable();
            $table->string('motivor5')->nullable();

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
        Schema::dropIfExists('entrevista4s');
    }
}
