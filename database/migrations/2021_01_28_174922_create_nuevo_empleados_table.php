<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNuevoEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('nuevo_empleados');
        Schema::create('nuevo_empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_filtro');
            $table->unsignedBigInteger('cedula');
            $table->string('nombre');
            $table->date('fInicio');
            $table->string('direccion');
            $table->unsignedBigInteger('telefonof')->nullable();
            $table->unsignedBigInteger('celular');
            $table->string('correo');
            $table->string('personaContacto');
            $table->string('parentezco');
            $table->unsignedBigInteger('contactof')->nullable();
            $table->unsignedBigInteger('contactoCelular');
            $table->string('foco');
            $table->string('campaña');
            $table->string('supervisor')->nullable();
            $table->string('cesantias');
            $table->string('pension');
            $table->string('eps');
            $table->string('estado');
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
        Schema::dropIfExists('nuevo_empleados');
    }
}
