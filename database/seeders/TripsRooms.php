<?php
declare(strict_types=1);
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TripsRooms extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')->truncate();
        DB::table('room_trip')->truncate();

        $rooms = [
            [
                'premium' => false,
                'double_beds' => 1,
                'single_beds' => 2,
                'kids_beds' => 0,
                'adults' => 2,
                'kids' => 2,
            ], [
                'premium' => true,
                'double_beds' => 1,
                'single_beds' => 0,
                'kids_beds' => 0,
                'adults' => 2,
                'kids' => 0,
            ], [
                'premium' => false,
                'double_beds' => 1,
                'single_beds' => 0,
                'kids_beds' => 1,
                'adults' => 2,
                'kids' => 1,
            ], [
                'premium' => false,
                'double_beds' => 1,
                'single_beds' => 1,
                'kids_beds' => 1,
                'adults' => 2,
                'kids' => 2,
            ], [
                'premium' => false,
                'double_beds' => 1,
                'single_beds' => 1,
                'kids_beds' => 10,
                'adults' => 2,
                'kids' => 2,
            ],
        ];

        $roomsPivot = [];

        $room = 1;
        for ($i = 2; $i < 6; $i++) {
            $roomsPivot[] = [
                'trip_id' => 1,
                'room_id' => $room,
                'available' => true,
                'number_room' => $i,
                'price' => rand(100, 300)
            ];

            $room++;
        }
        $roomsPivot[] = [
            'trip_id' => 1,
            'room_id' => 5,
            'available' => false,
            'number_room' => 7,
            'price' => rand(100, 300)
        ];
        DB::table('rooms')->insert($rooms);
        DB::table('room_trip')->insert($roomsPivot);



    }
}
