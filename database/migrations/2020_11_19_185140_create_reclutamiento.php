<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclutamiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('reclutamientos');
        Schema::create('reclutamientos', function (Blueprint $table) {
        $table->increments('id');
        $table->string('titulo');
        $table->string('foco');
        $table->longText('informacion');
        $table->string('foto');
        $table->string('tiempo');
        $table->string('finicio');
        $table->string('vincuventas')->nullable();
        $table->string('computrabajo')->nullable();
        $table->string('sne')->nullable();
        $table->string('compensar')->nullable();
        $table->string('rt')->nullable();
        $table->string('rj')->nullable();
        $table->string('rc')->nullable();
        $table->string('univ')->nullable();
        $table->string('redes')->nullable();
        $table->string('Hv')->nullable();
        $table->string('fundaciones')->nullable();
        $table->string('otros')->nullable();
        $table->string('publica');
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
        Schema::dropIfExists('reclutamientos');
    }
}
