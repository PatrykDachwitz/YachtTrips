<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoldersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $folders = [
            [
                'id' => 1,
                'path' => '/files',
                'parent' => 0,
                'name' => 'files',
            ], [
                'id' => 2,
                'path' => '/files/banners',
                'parent' => 1,
                'name' => 'banners',
            ], [
                'id' => 3,
                'path' => '/files/gallery',
                'parent' => 1,
                'name' => 'gallery',
            ], [
                'id' => 4,
                'path' => '/files/gallery/categories',
                'parent' => 3,
                'name' => 'categories',
            ], [
                'id' => 5,
                'path' => '/files/gallery/basic',
                'parent' => 3,
                'name' => 'basic',
            ]
        ];


       DB::table('folders')->truncate();
       DB::table('folders')->insert($folders);
    }
}
