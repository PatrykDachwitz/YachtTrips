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

        $filesCustom[] = [
            "name" => 'slider12',
            "extension" => 'jpg',
            'path' => '/files/banners',
            'preview_path' => '/file_preview/png.png',
            'size' => 5023,
            'author_id' => 1,
            'mime' => "image/png",
            'folder_id' => 1
        ];

        for ($i = 1; $i <= 8; $i++) {
            $filesCustom[] = [
                "name" => $i,
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/png.png',
                'size' => 5023,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 1
            ];
        }
        for ($i = 2; $i <= 9; $i++) {
            $filesPivot[] = [
                "device" => 'mobile',
                "file_id" => $i,
                "place_id" => $i,
            ];
            $filesPivot[] = [
                "device" => 'pc',
                "file_id" => $i,
                "place_id" => $i,
            ];
            $filesPivot[] = [
                "device" => 'tablet',
                "file_id" => $i,
                "place_id" => $i,
            ];
        }

        DB::table('files')->insertOrIgnore($filesCustom);
        DB::table('pivot_images')->insertOrIgnore($filesPivot);

        $file->factory()->count(70)->create();
        $folder->factory()->count(4)->create();
    }
}
