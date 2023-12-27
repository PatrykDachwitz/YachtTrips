<?php
declare(strict_types=1);
namespace Database\Seeders\files\banners;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OceansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $oceans = [
            [
                "name" => 'ocean_arktyczny',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                "name" => 'ocean_atlantycki',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                "name" => 'ocean_indyjski',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                "name" => 'ocean_poludniowy',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                "name" => 'ocean_spokojny',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ]
        ];

        DB::table('files')->insertOrIgnore($oceans);
    }
}
