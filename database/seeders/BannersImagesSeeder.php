<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannersImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imagesBanners = [
            [
                "device" => 'mobile',
                "file_id" => 3,
                "place_id" => 1,
            ], [
                "device" => 'tablet',
                "file_id" => 2,
                "place_id" => 1,
            ], [
                "device" => 'pc',
                "file_id" => 1,
                "place_id" => 1,
            ], [
                "device" => 'pc',
                "file_id" => 4,
                "place_id" => 5,
            ], [
                "device" => 'pc',
                "file_id" => 5,
                "place_id" => 3,
            ], [
                "device" => 'pc',
                "file_id" => 6,
                "place_id" => 4,
            ], [
                "device" => 'pc',
                "file_id" => 7,
                "place_id" => 6,
            ], [
                "device" => 'pc',
                "file_id" => 8,
                "place_id" => 2,
            ], [
                "device" => 'mobile',
                "file_id" => 9,
                "place_id" => 7,
            ], [
                "device" => 'tablet',
                "file_id" => 10,
                "place_id" => 7,
            ], [
                "device" => 'pc',
                "file_id" => 11,
                "place_id" => 7,
            ], [
                "device" => 'mobile',
                "file_id" => 12,
                "place_id" => 9,
            ], [
                "device" => 'pc',
                "file_id" => 13,
                "place_id" => 9,
            ], [
                "device" => 'mobile',
                "file_id" => 14,
                "place_id" => 10,
            ], [
                "device" => 'pc',
                "file_id" => 15,
                "place_id" => 10,
            ], [
                "device" => 'mobile',
                "file_id" => 16,
                "place_id" => 8,
            ], [
                "device" => 'pc',
                "file_id" => 17,
                "place_id" => 8,
            ], [
                "device" => 'pc',
                "file_id" => 18,
                "place_id" => 11,
            ], [
                "device" => 'pc',
                "file_id" => 19,
                "place_id" => 12,
            ], [
                "device" => 'pc',
                "file_id" => 20,
                "place_id" => 13,
            ], [
                "device" => 'pc',
                "file_id" => 21,
                "place_id" => 14,
            ], [
                "device" => 'pc',
                "file_id" => 22,
                "place_id" => 15,
            ], [
                "device" => 'pc',
                "file_id" => 23,
                "place_id" => 16,
            ],
        ];

        DB::table('pivot_images')->truncate();
        DB::table('pivot_images')->insert($imagesBanners);
    }
}
