<?php

namespace Database\Factories;

use App\Models\HomeSliderImage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HomeSliderImage>
 */
class HomeSliderImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HomeSliderImage::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image1' => 'img.png',
            'image2' => 'img.png',
            'image3' => 'img.png',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
