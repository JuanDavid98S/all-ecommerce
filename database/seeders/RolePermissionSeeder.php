<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Crear permisos
        $permissions = ['create post', 'edit post', 'delete post', 'publish post'];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Crear roles y asignar permisos
        $adminRole = Role::create(['name' => 'admin']);
        $editorRole = Role::create(['name' => 'editor']);
        $financialRole = Role::create(['name' => 'financial']);

        $adminRole->givePermissionTo(Permission::all());
        $editorRole->givePermissionTo(['create post', 'edit post']);
        $financialRole->givePermissionTo(['create post']);
    }
}
