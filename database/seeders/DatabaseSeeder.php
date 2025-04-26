<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Image;
use App\Models\Comment;
use App\Models\Product;
use App\Models\HomeSliderImage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Create admin user
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);

        // Create regular users
        User::factory(5)->create();

        // Create products for sale with images
        Product::factory(10)
            ->forSale()
            ->has(Image::factory())
            ->create();

        // Create products for rent with images
        Product::factory(10)
            ->forRent()
            ->has(Image::factory())
            ->create();

        // Create approved comments
        Comment::factory(8)
            ->approved()
            ->create();

        // Create pending comments
        Comment::factory(4)
            ->pending()
            ->create();

        // Create home slider images
        HomeSliderImage::factory()->create();
    }
}
