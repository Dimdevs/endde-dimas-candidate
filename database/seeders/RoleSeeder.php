<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create roles
        $roles = [
            [
                'name' => 'admin',
                'guard_name' => 'web'
            ],
            [
                'name' => 'super_admin',
                'guard_name' => 'web'
            ],
        ];

        foreach ($roles as $role) {
            if (array_key_exists('name', $role) && !Role::where('name', $role['name'])->exists()) {
                Role::create($role);
            }
        }

        // Assign permission to super_admin role
        $superAdminRole = Role::where('name', 'super_admin')->first();
        $permission = Permission::where('name', 'authentication')->first();

        if ($superAdminRole && $permission) {
            $superAdminRole->givePermissionTo($permission);
        }
    }
}
