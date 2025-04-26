<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'main_image' => 'imageprod/image1.jpg',
            'img1' => $this->faker->boolean(70) ? 'imageprod/image2.jpg' : null,
            'img2' => $this->faker->boolean(60) ? 'imageprod/image3.jpg' : null,
            'img3' => $this->faker->boolean(50) ? 'imageprod/image4.jpg' : null,
            'img4' => $this->faker->boolean(40) ? 'imageprod/image5.jpg' : null,
            'product_id' => Product::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
