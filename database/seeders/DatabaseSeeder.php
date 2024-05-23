<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        // SEED PARENT
        $this->call(CarSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(PermissionSeeder::class);

        // SEED CHILD
        $this->call(ClientSeeder::class);
    }
}
