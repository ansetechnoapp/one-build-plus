<?php

namespace Database\Seeders;

use App\Models\HomeSliderImage;
use Illuminate\Database\Seeder;

class HomeSliderImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create default home slider images if none exist
        if (HomeSliderImage::count() === 0) {
            HomeSliderImage::create([
                'image1' => 'imageslidehome/default1.jpg',
                'image2' => 'imageslidehome/default2.jpg',
                'image3' => 'imageslidehome/default3.jpg',
                'active' => true,
            ]);
        }
    }
}
