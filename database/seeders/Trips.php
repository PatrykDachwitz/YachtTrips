<?php
declare(strict_types=1);
namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Trips extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trips')->truncate();

        Trip::factory()->count(1)->create([
            'ocean_id' => 1,
            'price_adult' => 100,
            'price_kids' => 50,
        ]);
        Trip::factory()->count(10)->create();
    }
}
