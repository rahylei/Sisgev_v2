<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'create_lineas']);
        Permission::create(['name' => 'edit_lineas']);
        Permission::create(['name' => 'delete_lineas']);
        Permission::create(['name' => 'actualize_lineas']);
        Permission::create(['name' => 'create_piezas']);
        Permission::create(['name' => 'edit_piezas']);
        Permission::create(['name' => 'delete_piezas']);
        Permission::create(['name' => 'actualize_piezas']);
        Permission::create(['name' => 'create_personal']);
        Permission::create(['name' => 'edit_personal']);
        Permission::create(['name' => 'delete_personal']);
        Permission::create(['name' => 'actualize_personal']);
        Permission::create(['name' => 'register_piezas']);
        Permission::create(['name' => 'asign_pieza']);
        Permission::create(['name' => 'asign_personal']);
        Permission::create(['name' => 'asign_linea']);


        
        $role1 = Role::create(['name' => 'operador']);
        $role1->givePermissionTo('register_piezas');        

        $role2 = Role::create(['name' => 'encargado']);
        $role2->givePermissionTo('asign_personal');
        $role2->givePermissionTo('asign_pieza');

        $role3 = Role::create(['name' => 'administrador']);

        $role4 = Role::create(['name' => 'Super-Admin']);

        $user00 = User::find(1);
        $user00->assignRole($role3);

        $user01 = User::find(2);
        $user01->assignRole($role2);

        $user02 = User::find(3);
        $user02->assignRole($role1);
    }
}
