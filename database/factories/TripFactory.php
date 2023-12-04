<?php
declare(strict_types=1);
namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->streetName(),
            'start_day' => Carbon::now()->addDays(2),
            'end_day' => Carbon::now()->addDays(7),
            'yacht_id' => rand(1, 14),
            'ocean_id' => rand(1, 14),
            'template_id' => rand(1, 14),
            'count_day' => 5,
            'price_adult' => rand(100, 250),
            'price_kids' => rand(10, 100),
        ];
    }
}
