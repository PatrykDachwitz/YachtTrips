<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Ocean extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('oceans')->truncate();

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

        DB::table('oceans')->insertOrIgnore($oceans);
    }
}
