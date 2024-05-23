<?php

namespace Database\Seeders;

// Library
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

// Models
use App\Models\Client;
use App\Models\User;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 'name' => 'PT Endee Communication',

        $users = User::where('role' , 'client')->first();
        $client = Client::where('user_id' , $users->id)->first();
        if($users->email == 'endde.com@gmail.com' && !$client) {
            $startDate = Carbon::now();
            $endDate = $startDate->copy()->addMonth();
            Client::create([
                'user_id' => $users->id,
                'address' => 'Jl. Permata Meruya 2 No.26, RT.5/RW.7, Meruya Utara, Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11620',
                'start_date_contract' => $startDate->format('Y-m-d'),
                'end_date_contract' => $endDate->format('Y-m-d'),
            ]);
        }
    }
}
