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
        $file = new \App\Models\File();
        $folder = new Folder();

        $file->factory()->count(70)->create();
        $folder->factory()->count(4)->create();
    }
}
