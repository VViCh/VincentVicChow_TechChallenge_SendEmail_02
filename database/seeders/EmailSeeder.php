<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'email' => 'johndoe1@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'johndoe2@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'johndoe3@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}