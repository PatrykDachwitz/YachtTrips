<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\CategoryBanner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneratedBanners extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Banner $banner, CategoryBanner $categoryBanner): void
    {
        $banner->factory()->count(15)->create();
        $categoryBanner->factory()->count(5)->create();
    }
}
