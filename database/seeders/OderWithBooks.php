<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Order;
use App\Models\Vacationer;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OderWithBooks extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            "session_id" => "12",
        ]);

        Book::create([
            "trip_id" => 2,
            "order_id" => 1,
            "number_room" => 2,
            "count_adult" => 3,
            "count_kids" => 4,
            "double_beds" => 2,
            "single_beds" => 1,
            "kids_beds" => 1,
            "price" => 1042,
        ]);

        $faker = Factory::create();

        $ages = [
            'adults',
            "kid"
        ];

        for($i = 0;$i < 5; $i++) {

            Vacationer::create([
                "first_name" => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'age' => $ages[rand(0, 1)],
                "book_id" => 1
            ]);

        }
    }
}
