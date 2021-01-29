<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_filtro');
            $table->bigInteger('cedula')->unsigned();
            $table->string('nombre');
            $table->bigInteger('telefono')->unsigned();
            $table->string('correo');
            $table->string('perfil');
            $table->string('campaña');
            $table->string('fuente');
            $table->string('residencia');
            $table->string('id_localidad');
            $table->string('hv');
            $table->string('serv_publico');
            $table->string('cert_bancaria');
            $table->string('bancos');
            $table->string('ex_medico');
            $table->string('ant_procuraduria');
            $table->string('ant_ponal');
            $table->string('copia_cedula');
            $table->integer('cantidadcedula')->unsigned();
            $table->string('libreta_militar');
            $table->string('cert_bachiller');
            $table->string('cert_otros');
            $table->integer('cantidadcert')->nullable()->unsigned();
            $table->string('ref_laborales');
            $table->integer('cantidadlab')->unsigned();
            $table->string('ref_personales');
            $table->integer('cantidadper')->unsigned();
            $table->string('cert_eps');
            $table->string('cert_pensiones');
            $table->string('cert_cesantias');
            $table->string('nucleo_familiar');
            $table->longText('documentos')->nullable();
            $table->longText('observaciones')->nullable();
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
        Schema::dropIfExists('contratacions');
    }
}
