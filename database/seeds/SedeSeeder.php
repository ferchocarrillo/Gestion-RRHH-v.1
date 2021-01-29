<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\JhonatanPermission\Models\Sede;

class SedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sede')->truncate();

        DB::table('sede')->insert([
        'sede'=> 'Suba',
        ]);

        DB::table('sede')->insert([
            'sede'=> '100',
            ]);
    }
}
