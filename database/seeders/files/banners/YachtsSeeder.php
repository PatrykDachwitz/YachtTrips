<?php
declare(strict_types=1);
namespace Database\Seeders\files\banners;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YachtsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $yachts = [
            [
                'id' => 12,
                "name" => 'aquavista_mobile',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                'id' => 13,
                "name" => 'aquavista_pc',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                'id' => 14,
                "name" => 'seaserenity_mobile',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                'id' => 15,
                "name" => 'seaserenity_pc',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                'id' => 16,
                "name" => 'starbreeze_mobile',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                'id' => 17,
                "name" => 'starbreeze_pc',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ],
        ];

        DB::table('files')->insertOrIgnore($yachts);
    }
}
