<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Ahmed ElGarhy",
            "email" => "admin@gmail.com",
            "password" => Hash::make('123123123'),
            "phone_number" => "01205875836",
        ]);
        // DB::table('users')->insert([
        //     "name" => "Ahmed ElGarhy",
        //     "email" => "admin@gmail.com",
        //     "password" => Hash::make('123123123'),
        //     "phone_number" => "01205875836",
        // ]);
    }
}
