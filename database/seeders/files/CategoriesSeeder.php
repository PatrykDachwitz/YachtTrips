<?php
declare(strict_types=1);
namespace Database\Seeders\files;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoriesImage = [];
        for ($i = 0; $i <= 20; $i++) {
            $categoriesImage[] = [
                "name" => "kat_{$i}",
                "extension" => 'jpg',
                'path' => '/files/gallery/categories',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 4
            ];
        }

        DB::table('files')->insert($categoriesImage);
    }
}
