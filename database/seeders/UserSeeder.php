<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
           'email' => "adminMail@mail.ru",
            'password' => bcrypt("admin123"),
            'name' => "Armen",
            'role' => 'superAdmin'
        ]);
    }
}
