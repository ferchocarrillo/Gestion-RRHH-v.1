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
            $table->increments('id_area');
            $table->string('Id_dependencia');
            $table->string('Area');

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

