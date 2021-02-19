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
            $table->string('sinExp')->nullable();
            $table->string('empresa1')->nullable();
            $table->date('fechain1')->nullable();
            $table->date('fechart1')->nullable();
            $table->integer('tiempo1')->nullable();
            $table->string('hlcargo1')->nullable();
            $table->string('jefeinm1')->nullable();
            $table->bigInteger('teleinf1')->nullable();
            $table->string('salarioh1')->nullable();
            $table->string('motivor1')->nullable();
            $table->string('empresa2')->nullable();
            $table->date('fechain2')->nullable();
            $table->date('fechart2')->nullable();
            $table->integer('tiempo2')->nullable();
            $table->string('hlcargo2')->nullable();
            $table->string('jefeinm2')->nullable();
            $table->bigInteger('teleinf2')->nullable();
            $table->string('salarioh2')->nullable();
            $table->string('motivor2')->nullable();
            $table->string('empresa3')->nullable();
            $table->date('fechain3')->nullable();
            $table->date('fechart3')->nullable();
            $table->integer('tiempo3')->nullable();
            $table->string('hlcargo3')->nullable();
            $table->string('jefeinm3')->nullable();
            $table->bigInteger('teleinf3')->nullable();
            $table->string('salarioh3')->nullable();
            $table->string('motivor3')->nullable();
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
        Schema::dropIfExists('entrevista4s');
    }
}
