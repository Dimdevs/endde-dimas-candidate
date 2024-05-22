<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\TypeView;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rules = [
            'title' => 'unique:banners,title',
        ];

        $banners = [
            [
                'title' => 'THE 4RD INTERNATIONAL CONFERENCE ON APPLIED SCIENCE 2024',
                'image' => 'data/banner/example-banner.jpg',
            ],
        ];

        foreach ($banners as $banner) {
            $validation = Banner::where('title' , $banner['title'])->first();
            if(!$validation) {
                Banner::create($banner);
            }
        }
    }
}
