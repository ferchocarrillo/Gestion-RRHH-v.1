<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrevista2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrevista2s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_filtro');
            $table->bigInteger('cedula');
            $table->string('nombres');
            $table->bigInteger('telefono');
            $table->string('correo');
            $table->string('sinfamilia')->nullable();
            $table->string('familiarp1')->nullable();
            $table->string('parentescop1')->nullable();
            $table->string('edadp1')->nullable();
            $table->string('ocupacionp1')->nullable();
            $table->string('telefonop1')->nullable();
            $table->string('familiarp2')->nullable();
            $table->string('parentescop2')->nullable();
            $table->string('edadp2')->nullable();
            $table->string('ocupacionp2')->nullable();
            $table->string('telefonop2')->nullable();
            $table->string('familiarp3')->nullable();
            $table->string('parentescop3')->nullable();
            $table->string('edadp3')->nullable();
            $table->string('ocupacionp3')->nullable();
            $table->string('telefonop3')->nullable();
            $table->string('familiarp4')->nullable();
            $table->string('parentescop4')->nullable();
            $table->string('edadp4')->nullable();
            $table->string('ocupacionp4')->nullable();
            $table->string('telefonop4')->nullable();
            $table->string('familiarp5')->nullable();
            $table->string('parentescop5')->nullable();
            $table->string('edadp5')->nullable();
            $table->string('ocupacionp5')->nullable();
            $table->string('telefonop5')->nullable();
            $table->string('familiarp6')->nullable();
            $table->string('parentescop6')->nullable();
            $table->string('edadp6')->nullable();
            $table->string('ocupacionp6')->nullable();
            $table->string('telefonop6')->nullable();
            $table->string('familiarp7')->nullable();
            $table->string('parentescop7')->nullable();
            $table->string('edadp7')->nullable();
            $table->string('ocupacionp7')->nullable();
            $table->string('telefonop7')->nullable();
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
        Schema::dropIfExists('entrevista2s');
    }
}
