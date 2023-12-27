<?php
declare(strict_types=1);
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $templates = [
            [
                "id" => 1,
                'name' => "banner"
            ], [
                "id" => 2,
                'name' => "oceans"
            ], [
                "id" => 3,
                'name' => "yachts"
            ], [
                "id" => 4,
                'name' => "why"
            ], [
                "id" => 5,
                'name' => "popularTrips"
            ], [
                "id" => 6,
                'name' => "opinions"
            ],
        ];


        DB::table('templates')->truncate();
        DB::table('templates')->insertOrIgnore($templates);

    }
}
