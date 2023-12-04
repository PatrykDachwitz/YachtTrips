<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Gallery extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gallery = [];

        for ($i = 0; $i <= 16; $i++) {
            $gallery[] = [
                "name" => $i,
                "extension" => 'jpg',
                'path' => '/files/gallery',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 3
            ];
        }

        DB::table('files')->insert($gallery);

        $galleryPivot = [];

        $galleryPivot[] = [
            "default" => 1,
            'position' => 0,
            'trip_id' => 1,
            'file_id' => 94,
        ];

        $position = 1;
        for ($i = 95; $i < 107; $i++) {
            $galleryPivot[] = [
                "default" => false,
                'position' => $position,
                'trip_id' => 1,
                'file_id' => $i,
            ];
            $position++;
        }
        DB::table("file_trip")->truncate();
        DB::table("file_trip")->insert($galleryPivot);


    }
}
