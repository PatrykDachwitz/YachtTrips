<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->truncate();

        $availableStatuses = [
            'reservation',
            'waitToPayment',
            'Payment',
        ];

        foreach ($availableStatuses as $status) {
            DB::table('statuses')->insertOrIgnore([
                'name' => $status
            ]);
        }

    }
}
