<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $car = Car::where('name' , 'Toyota Alphard')->first();
        if(!$car) {
            Car::create([
                'name' => 'Toyota Alphard',
                'merk' => 'Toyota',
                'type' => 'FAMILY',
                'plat_number' => 'B 121 01',
            ]);
        }
    }
}
