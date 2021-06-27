<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::truncate();
        Role::truncate();
        User::truncate();

        // ROLES
        $adminRole = Role::create(['name' => 'Administrador']);
        $salesmanRole = Role::create(['name' => 'Vendedor']);

        // PERMISOS
        $viewUsersPermission = Permission::create(['name' => 'Ver Lista de Usuarios']);
        $createUsersPermission = Permission::create(['name' => 'Registrar Usuarios']);
        $updateUsersPermission = Permission::create(['name' => 'Modificar Usuarios']);
        $deleteUsersPermission = Permission::create(['name' => 'Eliminar Usuarios']);

        // ASIGNAR PERMISOS A ROLES
        $adminRole->givePermissionTo([
            $viewUsersPermission,
            $createUsersPermission,
            $updateUsersPermission,
            $deleteUsersPermission
        ]);

        // USUARIOS
        $admin = new User;
        $admin->name = 'Username';
        $admin->surname = 'UserSurname';
        $admin->dni = '77777777';
        $admin->state = 'Activo';
        $admin->email = 'user01@gmail.com';
        $admin->password = 'userpassword01';
        $admin->save();

        $admin->syncRoles($adminRole);

        $salesman = new User;
        $salesman->name = 'Username2';
        $salesman->surname = 'UserSurname2';
        $salesman->dni = '78888888';
        $salesman->state = 'Deshabilitado';
        $salesman->email = 'user02@gmail.com';
        $salesman->password = 'userpassword02';
        $salesman->save();

        $salesman->syncRoles($salesmanRole);
    }
}
