<?php
declare(strict_types=1);
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(GeneratedBanners::class);
        $this->call(File::class);
        $this->call(Pages::class);
        $this->call(Trips::class);
        $this->call(Yacht::class);
        $this->call(Ocean::class);
        $this->call(TripsRooms::class);
        $this->call(Gallery::class);
    }
}
