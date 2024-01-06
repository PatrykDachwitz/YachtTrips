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
                "super_admin" => false,
                'security' => 0
            ], [
                'name' => 'Admin2',
                'email' => 'admin2@admin.pl',
                'password' => Hash::make('admin2'),
                "super_admin" => true,
                'security' => 1
            ], [
                'name' => 'Admin3',
                'email' => 'admin3@admin.pl',
                'password' => Hash::make('admin2'),
                "super_admin" => false,
                'security' => 4
            ]
        ];


        DB::table('users')
            ->truncate();
        DB::table('users')
            ->insert($users);
    }
}
