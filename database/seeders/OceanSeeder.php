<?php
declare(strict_types=1);
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OceanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $oceans = [
            [
                'name' => "Ocean Spokojny"
            ], [
                'name' => "Ocean Atlantycki"
            ], [
                'name' => "Ocean Indyjski"
            ], [
                'name' => "Ocean Arktyczny"
            ], [
                'name' => "Ocean Antarktyczny"
            ]
        ];

        DB::table('oceans')->truncate();
        DB::table('oceans')->insert($oceans);
    }
}
