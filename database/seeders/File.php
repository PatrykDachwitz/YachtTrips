<?php

namespace Database\Seeders;

use App\Models\Folder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class File extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('files')->truncate();
        DB::table('folders')->truncate();
        DB::table('pivot_images')->truncate();
        $file = new \App\Models\File();
        $folder = new Folder();

        $filesCustom = [];
        $filesPivot = [];


        //Build structure for main banner files
        $filesMainBanners = [
            [
                "name" => 'banner_main_pc',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                "name" => 'banner_main_tablet',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                "name" => 'banner_main_mobile',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ],
        ];
        $pivotMainBanners = [
            [
                "device" => 'mobile',
                "file_id" => 3,
                "place_id" => 1,
            ], [
                "device" => 'tablet',
                "file_id" => 2,
                "place_id" => 1,
            ], [
                "device" => 'pc',
                "file_id" => 1,
                "place_id" => 1,
            ],
        ];

        $filesCustom = array_merge($filesCustom, $filesMainBanners);
        $filesPivot = array_merge($filesPivot, $pivotMainBanners);

        //Build structure for oceans sliders
        $filesOceans = [
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
        $pivotOceans = [
            [
                "device" => 'pc',
                "file_id" => 4,
                "place_id" => 5,
            ], [
                "device" => 'pc',
                "file_id" => 5,
                "place_id" => 3,
            ], [
                "device" => 'pc',
                "file_id" => 6,
                "place_id" => 4,
            ], [
                "device" => 'pc',
                "file_id" => 7,
                "place_id" => 6,
            ], [
                "device" => 'pc',
                "file_id" => 8,
                "place_id" => 2,
            ],
        ];

        $filesCustom = array_merge($filesCustom, $filesOceans);
        $filesPivot = array_merge($filesPivot, $pivotOceans);



        DB::table('files')->insertOrIgnore($filesCustom);
        DB::table('pivot_images')->insertOrIgnore($filesPivot);


        $file->factory()->count(70)->create();
        $folder->create([
            'id' => 1,
            'path' => '/files',
            'parent' => 0,
            'name' => 'files',
        ]);

        $folder->create([
            'id' => 2,
            'path' => '/files/banners',
            'parent' => 1,
            'name' => 'banners',
        ]);
        $folder->factory()->count(30)->create();
    }
}
