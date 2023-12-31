<?php
declare(strict_types=1);
namespace Database\Seeders\files\banners;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'id' => 18,
                "name" => 'people_1',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                'id' => 19,
                "name" => 'people_2',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                'id' => 20,
                "name" => 'people_3',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                'id' => 21,
                "name" => 'people_4',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                'id' => 22,
                "name" => 'people_5',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                'id' => 23,
                "name" => 'people_6',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ],
        ];

        DB::table('files')->insertOrIgnore($reviews);
    }
}
