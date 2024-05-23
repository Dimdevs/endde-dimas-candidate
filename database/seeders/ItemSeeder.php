<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Model
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $item = Item::where('name' , 'Ban mobil GT Radial 205/50 R16 Champiro SX2')->first();
        if(!$item) {
            Item::create([
                'name' => 'Ban mobil GT Radial 205/50 R16 Champiro SX2',
                'price' => 824000,
                'description' => 'Ban Mobil GT Radial cocok untuk mobil Toyota Yaris, Honda Jazz, Honda Brio, Honda Civic.',
                'image' => url('data/item/ban.jpg')
            ]);
        }
        //
    }
}
