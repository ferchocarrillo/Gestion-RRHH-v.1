<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisicionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisicions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cargo');
            $table->integer('cantidad')->unsigned();
            $table->string('sede');
            $table->string('dependencias');
            $table->string('area');
            $table->string('motivos');
            $table->string('reemplaza')->nullable();
            $table->string('cual')->nullable();
            $table->string('tiempo');
            $table->string('dias');
            $table->string('jornada');
            $table->date('finicio');
            $table->string('solicita');
            $table->string('revisado')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('edad')->nullable();
            $table->string('profesion')->nullable();
            $table->string('orientacion')->nullable();
            $table->string('raza')->nullable();
            $table->string('culto')->nullable();
            $table->string('imposibilita')->nullable();
            $table->string('sexo')->nullable();
            $table->string('disfisica')->nullable();
            $table->string('dismental')->nullable();
            $table->string('nacionalidad')->nullable();
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
        Schema::dropIfExists('requisicions');
    }
}
