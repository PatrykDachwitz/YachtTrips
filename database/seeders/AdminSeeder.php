<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.pl',
                'password' => Hash::make('admin'),
                "super_admin" => false
            ], [
                'name' => 'Admin2',
                'email' => 'admin2@admin.pl',
                'password' => Hash::make('admin2'),
                "super_admin" => true
            ],
        ];


        DB::table('users')
            ->truncate();
        DB::table('users')
            ->insert($users);
    }
}
