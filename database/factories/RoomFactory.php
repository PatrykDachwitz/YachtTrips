<?php
declare(strict_types=1);
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $doubleBeds = rand(0, 3);

        if ($doubleBeds === 0) {
            $singleBeds = rand(1, 4);
        } else {
            $singleBeds = rand(0, 4);
        }

        $kidsBed = rand(0, 4);

        $adultCount = ($doubleBeds * 2) + ($singleBeds * 1);

        return [
            'premium' => rand(0, 1),
            'double_beds' => $doubleBeds,
            'single_beds' => $singleBeds,
            'kids_beds' => $kidsBed,
            'adults' => $adultCount,
            'kids' => $kidsBed,
            'name' => fake()->streetName(),
        ];
    }
}
