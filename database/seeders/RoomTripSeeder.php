<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTripSeeder extends Seeder
{
    const FIRST_NUMBER_ROOM = 5;
    /**
     * Run the database seeds.
     */
    public function run(Trip $trip): void
    {
        DB::table('room_trip')->truncate();

        $rooms = (DB::table('rooms')
            ->select('id')
            ->get())
            ->toArray();

        $trips = $trip->with('rooms')->get();


        foreach ($trips as $tripSelect) {
            $countSelectRoom = rand(4, count($rooms));
            $numberRoom = self::FIRST_NUMBER_ROOM;

            for ($i = 0; $i < $countSelectRoom; $i++) {
                $currentIdRoom = $rooms[array_rand($rooms)]->id;

                for ($j = 0; $j <= rand(5, 20); $j++) {
                    $tripSelect->rooms()->attach($currentIdRoom, [
                        'number_room' => $numberRoom,
                        "price" => rand(50, 500),
                        "available" => true,
                    ]);
                    $numberRoom++;
                }
            }
        }



    }
}
