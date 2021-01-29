<?php

use Illuminate\Database\Seeder;
use App\User;
use App\JhonatanPermission\Models\Role;
use App\JhonatanPermission\Models\Permission;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class JhonatanPermissionInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate tables
        DB::statement("SET foreign_key_checks=0");
            DB::table('role_user')->truncate();
            DB::table('permission_role')->truncate();

            Permission::truncate();
            Role::truncate();
            DB::statement("SET foreign_key_checks=1");



        //user admin
        $useradmin= User::where('email','admin@admin.com')->first();
        if ($useradmin) {
            $useradmin->delete();
        }
        $useradmin= User::create([
            'name'      => 'admin',
            'cedula'     =>'123456789',
            'email'     => 'admin@admin.com',
            'password'  => Hash::make('admin')
        ]);

        //rol admin
        $roladmin=Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Administrador',
            'full-access' => 'yes'

        ]);

         //rol Registered User
         $roluser=Role::create([
            'name' => 'Registered User',
            'slug' => 'registereduser',
            'description' => 'Usuario Registrado',
            'full-access' => 'no'

        ]);
         //rol Analista User
         $analistauser=Role::create([
            'name' => 'Analista User',
            'slug' => 'analistauser',
            'description' => 'perfil analista',
            'full-access' => 'no'

        ]);

        //table role_user
        $useradmin->roles()->sync([ $roladmin->id ]);


        //permission
        $permission_all = [];


        //permission role
        $permission = Permission::create([
            'name' => 'Index role',
            'slug' => 'role.index',
            'description' => 'Un usuario puede listar un Rol',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show role',
            'slug' => 'role.show',
            'description' => 'Un usuario puede Ver un Rol',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Create role',
            'slug' => 'role.create',
            'description' => 'Un usuario puede Crear un Rol',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit role',
            'slug' => 'role.edit',
            'description' => 'Un usuario puede Editar un Rol',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy role',
            'slug' => 'role.destroy',
            'description' => 'Un usuario puede Destruir un Rol',
        ]);

        $permission_all[] = $permission->id;



        //permission user
        $permission = Permission::create([
            'name' => 'List user',
            'slug' => 'user.index',
            'description' => 'Un usuario puede Listar un Usuario',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show user',
            'slug' => 'user.show',
            'description' => 'Un usuario puede Ver un Usuario',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit user',
            'slug' => 'user.edit',
            'description' => 'Un usuario puede Editar un Usuario',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy user',
            'slug' => 'user.destroy',
            'description' => 'Un usuario puede Destriur un Usuario',
        ]);

        $permission_all[] = $permission->id;


        //new
        $permission = Permission::create([
            'name' => 'Show own user',
            'slug' => 'userown.show',
            'description' => 'Un usuario puede Ver a si mismo',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit own user',
            'slug' => 'userown.edit',
            'description' => 'Un usuario puede Editar a si mismo',
        ]);




        /*$permission = Permission::create([
            'name' => 'Create user',
            'slug' => 'user.create',
            'description' => 'A user can create user',
        ]);

        $permission_all[] = $permission->id;
        */

        //table permission_role
        //$roladmin->permissions()->sync( $permission_all);





    }
}
