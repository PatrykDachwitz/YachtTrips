<?php

namespace Database\Seeders;

use Database\Seeders\files\banners\MainBannersSeeder;
use Database\Seeders\files\banners\OceansSeeder;
use Database\Seeders\files\banners\ReviewsSeeder;
use Database\Seeders\files\banners\WhySeeder;
use Database\Seeders\files\banners\YachtsSeeder;
use Database\Seeders\files\CategoriesSeeder;
use Database\Seeders\files\GallerySeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("files")->truncate();

        $this->call(MainBannersSeeder::class);
        $this->call(OceansSeeder::class);
        $this->call(ReviewsSeeder::class);
        $this->call(WhySeeder::class);
        $this->call(YachtsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(GallerySeeder::class);
    }
}
