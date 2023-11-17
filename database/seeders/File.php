<?php
declare(strict_types=1);
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

        //Build structure for why my files
        $filesWhy = [
            [
                "name" => 'why_mobile',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                "name" => 'why_tablet',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                "name" => 'why_pc',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ],
        ];
        $pivotWhy = [
            [
                "device" => 'mobile',
                "file_id" => 9,
                "place_id" => 7,
            ], [
                "device" => 'tablet',
                "file_id" => 10,
                "place_id" => 7,
            ], [
                "device" => 'pc',
                "file_id" => 11,
                "place_id" => 7,
            ],
        ];

        $filesCustom = array_merge($filesCustom, $filesWhy);
        $filesPivot = array_merge($filesPivot, $pivotWhy);


        //Build structure for yachts my files
        $filesYacht = [
            [
                "name" => 'aquavista_mobile',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                "name" => 'aquavista_pc',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                "name" => 'seaserenity_mobile',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                "name" => 'seaserenity_pc',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                "name" => 'starbreeze_mobile',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
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
        $pivotYacht = [
            [
                "device" => 'mobile',
                "file_id" => 12,
                "place_id" => 9,
            ], [
                "device" => 'pc',
                "file_id" => 13,
                "place_id" => 9,
            ], [
                "device" => 'mobile',
                "file_id" => 14,
                "place_id" => 10,
            ], [
                "device" => 'pc',
                "file_id" => 15,
                "place_id" => 10,
            ], [
                "device" => 'mobile',
                "file_id" => 16,
                "place_id" => 8,
            ], [
                "device" => 'pc',
                "file_id" => 17,
                "place_id" => 8,
            ],
        ];

        $filesCustom = array_merge($filesCustom, $filesYacht);
        $filesPivot = array_merge($filesPivot, $pivotYacht);


        //Build structure for people my files
        $filesPeople = [
            [
                "name" => 'people_1',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                "name" => 'people_2',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                "name" => 'people_3',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                "name" => 'people_4',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
                "name" => 'people_5',
                "extension" => 'jpg',
                'path' => '/files/banners',
                'preview_path' => '/file_preview/jpg.png',
                'size' => 5024,
                'author_id' => 1,
                'mime' => "image/jpg",
                'folder_id' => 2
            ], [
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
        $pivotPeople = [
            [
                "device" => 'pc',
                "file_id" => 18,
                "place_id" => 11,
            ], [
                "device" => 'pc',
                "file_id" => 19,
                "place_id" => 12,
            ], [
                "device" => 'pc',
                "file_id" => 20,
                "place_id" => 13,
            ], [
                "device" => 'pc',
                "file_id" => 21,
                "place_id" => 14,
            ], [
                "device" => 'pc',
                "file_id" => 22,
                "place_id" => 15,
            ], [
                "device" => 'pc',
                "file_id" => 23,
                "place_id" => 16,
            ],
        ];

        $filesCustom = array_merge($filesCustom, $filesPeople);
        $filesPivot = array_merge($filesPivot, $pivotPeople);



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
