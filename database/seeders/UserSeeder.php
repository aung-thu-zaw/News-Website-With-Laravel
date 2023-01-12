<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            "name"=>"Aung Thu Zaw",
            "avatar"=>"avatar-1.jpg",
            "email"=>"aungthuzaw@gmail.com",
            "password"=>"11111111",
            "is_admin"=>true,
            "role"=>"admin"
        ]);

        User::factory()->create([
            "name"=>"Kevin",
            "avatar"=>"avatar-2.jpg",
            "email"=>"kevin@gmail.com",
            "password"=>"11111111",
            "role"=>"author"
        ]);

        User::factory()->create([
            "name"=>"Xyder",
            "avatar"=>"avatar-3.jpg",
            "email"=>"xyder@gmail.com",
            "password"=>"11111111",
            "role"=>"author"
        ]);

        User::factory()->create([
            "name"=>"John",
            "avatar"=>"avatar-4.jpg",
            "email"=>"john@gmail.com",
            "password"=>"11111111",
            "role"=>"author"
        ]);

        User::factory()->create([
            "name"=>"Sam",
            "avatar"=>"avatar-5.jpg",
            "email"=>"sam@gmail.com",
            "password"=>"11111111",
            "role"=>"author"
        ]);

        User::factory()->create([
            "name"=>"Jaden",
            "avatar"=>"avatar-6.jpg",
            "email"=>"jaden@gmail.com",
            "password"=>"11111111",
            "role"=>"editor"
        ]);
    }
}
