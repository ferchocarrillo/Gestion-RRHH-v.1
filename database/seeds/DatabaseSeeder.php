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
    // $this->call(UsersTableSeeder::class);
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
     $this->call(FocoSeeder::class);
     $this->call(CampanaSeeder::class);
     $this->call(NivelEduSeeder::class);
     $this->call(ParentescoSeeder::class);
     $this->call(TipoDocSeeder::class);
     $this->call(TipoContratoSeeder::class);
     $this->call(SupervisorSeeder::class);
     $this->call(ModalidadSeeder::class);
     $this->call(TipoModalidadSeeder::class);
     $this->call(CesantiasSeeder::class);
     $this->call(PensionesSeeder::class);
     $this->call(EpsSeeder::class);
     $this->call(CajaCompensacionSeeder::class);
     $this->call(AprobacionSeeder::class);
     $this->call(MotivoRetiroSeeder::class);     
     $this->call(TipoNovedadSeeder::class);
     $this->call(FuenteSeeder::class);
     $this->call(TViviendaSeeder::class);
     $this->call(SMilitarSeeder::class);     
     $this->call(ECivilSeeder::class); 
     $this->call(GeneroSeeder::class);
     $this->call(TipoDoc2Seeder::class);
     $this->call(RhSeeder::class);     
}
}
