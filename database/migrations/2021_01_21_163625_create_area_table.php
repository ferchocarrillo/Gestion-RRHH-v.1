<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('area');
        Schema::create('area', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dependencia');
            $table->string('area');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
    */
   public function down()
   {
        Schema::dropIfExists('area');
    }
}

