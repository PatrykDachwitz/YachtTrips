<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Trip $trips): void
    {
        $images = (DB::table('files')
            ->select('id')
            ->where('folder_id', 4)
            ->get())->toArray();

        foreach ($trips
                     ->with('images')
                     ->get() as $trip) {
            $currentCategoryImageId = $images[array_rand($images)]->id;
            $trip->images()->attach($currentCategoryImageId, [
                'default' => 1,
                "position" => 0
            ]);
        }

    }
}
