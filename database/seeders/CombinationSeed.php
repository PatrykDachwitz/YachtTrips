<?php

namespace Database\Seeders;

use App\Models\Combination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CombinationSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 40; $i++) {
            Combination::create([
                'trips_id' => 1,
                'rooms_id' => rand(1, 4),
                'available' => true,
                'price' => 300,
            ]);
        }
    }
}
