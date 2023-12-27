<?php
declare(strict_types=1);
namespace Database\Seeders\files;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galleryImage = [];

        for ($i = 1; $i <= 29; $i++) {
            $galleryImage[] = [
                "name" => $i,
                "extension" => 'jpg',
                'path' => '/files/gallery/basic',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 5
            ];
        }

        DB::table('files')->insert($galleryImage);
    }
}
