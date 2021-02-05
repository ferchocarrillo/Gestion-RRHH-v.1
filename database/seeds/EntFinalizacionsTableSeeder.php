<?php

use App\EntFinalizacion;
use App\JhonatanPermission\Models\EntFinalizacion as ModelsEntFinalizacion;
use Illuminate\Database\Seeder;

class EntFinalizacionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 50;
        factory(EntFinalizacion::class, $count)->make();
    }
}
