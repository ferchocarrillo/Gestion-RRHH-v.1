<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(JhonatanPermissionInfoSeeder::class);
        $this->call(SedeSeeder::class);
        $this->call(CargoSeeder::class);
        $this->call(DependenciaSeeder::class);
        $this->call(PerfilSeeder::class);
        $this->call(Tipo_viasSeeder::class);
        $this->call(DepartamentosSeeder::class);
        $this->call(CiudadSeeder::class);
        $this->call(PrefijoSeeder::class);
        $this->call(OrientacionSeeder::class);
        $this->call(AdicionalSeeder::class);
        $this->call(Adicional2Seeder::class);
        $this->call(LocalidadSeeder::class);
        $this->call(ResidenciaSeeder::class);
        $this->call(CargoEntSeeder::class);
    $this->call(BancosSeeder::class);
    $this->call(AreaSeeder::class);
}
}
