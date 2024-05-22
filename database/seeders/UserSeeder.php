<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accounts = [
            [
                'name' => 'Super Admin',
                'email' => 'super.admin@gmail.com',
                'password' => bcrypt('admin123'),
                'role' => 'super_admin',
                'status' => 1,
                'email_verified_at' => Carbon::now()->setTimeZone('Asia/Jakarta')
            ],
            [
                'name' => 'Admin',
                'email' => 'creator.admin@gmail.com',
                'password' => bcrypt('admin123'),
                'role' => 'admin',
                'status' => 1,
                'email_verified_at' => Carbon::now()->setTimeZone('Asia/Jakarta')
            ],
        ];

        foreach ($accounts as $account) {
            if (array_key_exists('name', $account)) {
                $user = User::updateOrCreate(['email' => $account['email']], $account);
                switch ($account['role']) {
                    case 'super_admin':
                        $user->assignRole('super_admin');
                        break;
                    case 'admin':
                        $user->assignRole('admin');
                        break;
                }
            }
        }
    }
}
