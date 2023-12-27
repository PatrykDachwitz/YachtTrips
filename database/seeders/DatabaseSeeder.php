<?php
declare(strict_types=1);
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\files\CategoriesSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('books')->truncate();
        DB::table('orders')->truncate();
        DB::table('peoples')->truncate();
        DB::table('vacationers')->truncate();

        $this->call(FoldersSeeder::class);
        $this->call(TemplatesSeeder::class);
        $this->call(CategoryBannersSeeders::class);
        $this->call(BannersSeeders::class);
        $this->call(MethodsPaymentSeeder::class);
        $this->call(OceanSeeder::class);
        $this->call(PagesSeeder::class);
        $this->call(RoomsSeeder::class);
        $this->call(YachtsSeeder::class);
        $this->call(TripsSeeder::class);
        $this->call(FilesSeeder::class);
        $this->call(BannersImagesSeeder::class);
        $this->call(RoomTripSeeder::class);

        DB::table('file_trip')->truncate();
        $this->call(CategoriesTripSeeder::class);
        $this->call(GalleryTripSeeder::class);

    }
}
