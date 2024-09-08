<?php
declare(strict_types=1);
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Combination>
 */
class CombinationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'trips_id' => rand(1, 10),
            'rooms_id' => rand(1, 10),
            'available' => rand(0, 1),
            'price' => rand(100, 400),
        ];
    }
}
