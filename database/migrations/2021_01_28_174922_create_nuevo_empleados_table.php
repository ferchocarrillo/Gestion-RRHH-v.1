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
            $table->string('nombre');
            $table->string('tipoDoc');
            $table->unsignedBigInteger('cedula');
            $table->date('fexpe');
            $table->string('depNac');
            $table->string('id_ciudad');
            $table->string('correo');
            $table->unsignedBigInteger('tCelular');
            $table->unsignedBigInteger('tFijo')->nullable();
            $table->string('eCivil');
            $table->string('direccion');
            $table->string('residencia');
            $table->string('lugarNac');
            $table->unsignedInteger('edad');
            $table->string('genero');
            $table->string('rh');
            $table->string('nivelEdu');
            $table->string('cargo');
            $table->string('corporativo');
            $table->string('personaContacto');
            $table->string('parentesco');
            $table->string('personaDireccion');
            $table->string('contactof');
            $table->string('contactoCelular');
            $table->unsignedInteger('numHijos')->nullable();
            $table->unsignedInteger('hijosMAs')->nullable();
            $table->unsignedInteger('hijosFem')->nullable();
            $table->string('Preexistencia');
            $table->string('alergias');
            $table->string('medicamentos');
            $table->string('tipo_docs1')->nullable();
            $table->unsignedBigInteger('docfam1')->nullable();
            $table->string('familiarp1')->nullable();
            $table->string('parentescop1')->nullable();
            $table->unsignedInteger('edadp1')->nullable();
            $table->string('epsFam1')->nullable();
            $table->string('alergias1')->nullable();
            $table->string('tipo_docs2')->nullable();
            $table->unsignedBigInteger('docfam2')->nullable();
            $table->string('familiarp2')->nullable();
            $table->string('parentescop2')->nullable();
            $table->unsignedInteger('edadp2')->nullable();
            $table->string('epsFam2')->nullable();
            $table->string('alergias2')->nullable();
            $table->string('tipo_docs3')->nullable();
            $table->unsignedBigInteger('docfam3')->nullable();
            $table->string('familiarp3')->nullable();
            $table->string('parentescop3')->nullable();
            $table->unsignedInteger('edadp3')->nullable();
            $table->string('epsFam3')->nullable();
            $table->string('alergias3')->nullable();
            $table->string('tipo_docs4')->nullable();
            $table->unsignedBigInteger('docfam4')->nullable();
            $table->string('familiarp4')->nullable();
            $table->string('parentescop4')->nullable();
            $table->unsignedInteger('edadp4')->nullable();
            $table->string('epsFam4')->nullable();
            $table->string('alergias4')->nullable();
            $table->unsignedBigInteger('salario')->nullable();
            $table->date('ingreso');
            $table->string('tipo_contratos');
            $table->string('supervisor');
            $table->string('sede');
            $table->string('modalidad');
            $table->string('tipoModalidad');
            $table->string('cesantias');
            $table->string('pensiones');
            $table->string('eps');
            $table->string('cajaComp');
            $table->string('ips');
            $table->string('arl');
            $table->string('Tcuenta');
            $table->unsignedBigInteger('nCuenta');
            $table->string('bancos');
            $table->string('estado');
            $table->string('foco');
            $table->string('campaña');
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
