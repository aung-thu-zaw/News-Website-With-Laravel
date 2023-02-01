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
            "password"=>"Password!",
            "role"=>"admin",
            "twitter_link"=>"http://example.com",
            "facebook_link"=>"http://example.com",
            "linked_in_link"=>"http://example.com",
            "whats_app_link"=>"http://example.com",
        ]);

        User::factory()->create([
            "name"=>"Kevin",
            "avatar"=>"avatar-2.jpg",
            "email"=>"kevin@gmail.com",
            "password"=>"Password!",
            "role"=>"writer",
            "twitter_link"=>"http://example.com",
            "whats_app_link"=>"http://example.com",
        ]);

        User::factory()->create([
            "name"=>"Xyder",
            "avatar"=>"avatar-3.jpg",
            "email"=>"xyder@gmail.com",
            "password"=>"Password!",
            "role"=>"editor",
            "twitter_link"=>"http://example.com",
            "facebook_link"=>"http://example.com",
            "linked_in_link"=>"http://example.com",
            "whats_app_link"=>"http://example.com",
        ]);

        User::factory()->create([
            "name"=>"John",
            "avatar"=>"avatar-4.jpg",
            "email"=>"john@gmail.com",
            "password"=>"Password!",
            "role"=>"writer",
            "twitter_link"=>"http://example.com",
            "facebook_link"=>"http://example.com",
        ]);

        User::factory()->create([
            "name"=>"Sam",
            "avatar"=>"avatar-5.jpg",
            "email"=>"sam@gmail.com",
            "password"=>"Password!",
            "role"=>"writer",
            "twitter_link"=>"http://example.com",
        ]);

        User::factory()->create([
            "name"=>"Jaden",
            "avatar"=>"avatar-6.jpg",
            "email"=>"jaden@gmail.com",
            "password"=>"Password!",
            "role"=>"editor",
            "whats_app_link"=>"http://example.com",
        ]);
    }
}
