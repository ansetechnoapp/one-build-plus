<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'landOwner_propertyName' => $this->faker->company(),
            'address' => $this->faker->address(),
            'department' => $this->faker->state(),
            'communes' => $this->faker->city(),
            'borough' => $this->faker->streetName(),
            'area' => $this->faker->numberBetween(50, 500) . ' m²',
            'price' => $this->faker->numberBetween(50000, 500000),
            'price_min' => $this->faker->numberBetween(10000, 50000),
            'description' => $this->faker->paragraph(),
            'ground_type' => $this->faker->randomElement(['Residential', 'Commercial', 'Industrial', 'Agricultural']),
            'status' => $this->faker->randomElement(['disponible', 'vendu', 'réservé']),
            'number_of_bedrooms' => $this->faker->numberBetween(1, 5),
            'number_of_bathrooms' => $this->faker->numberBetween(1, 3),
            'location' => $this->faker->randomElement(['oui', 'non']),
            'locationType' => $this->faker->randomElement(['sanitaire', 'non sanitaire']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Indicate that the product is for sale.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function forSale()
    {
        return $this->state(function (array $attributes) {
            return [
                'location' => 'non',
            ];
        });
    }

    /**
     * Indicate that the product is for rent.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function forRent()
    {
        return $this->state(function (array $attributes) {
            return [
                'location' => 'oui',
            ];
        });
    }
}
