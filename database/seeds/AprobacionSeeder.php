<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class AprobacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::dropIfExists('aprobacions');
        Schema::create('aprobacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('aprobacion');
        });

        DB::table('aprobacions')->truncate();

        DB::table('aprobacions')->insert(['aprobacion'=>'Aprobado']);
        DB::table('aprobacions')->insert(['aprobacion'=>'No aprobado']);



    }
}
