<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Admin;
use App\Models\Genre;
use App\Models\Novel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $year_published = "2000-01-15";
        Admin::create([
            'name' => 'admin', 
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123'),
        ]);
        Genre::create([
            'name' => 'Action',
            'admin_id' => 1,
        ]);
        Genre::create([
            'name' => 'Romance',
            'admin_id' => 1,
        ]);
        Novel::create([
            'title' => 'Naruto',
            'slug' => 'naruto',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum iure praesentium consequuntur non ut atque sunt incidunt porro voluptate delectus, maiores inventore libero fuga minus eaque! Odit illo inventore sit.',
            'image' => '/novel/img-1.png',
            'creator' => 'Khisimoto',
            'year_published' => $year_published,
            'admin_id' => 1,
            'genre_id' => 1,
        ]);
        Novel::create([
            'title' => 'Boruto',
            'slug' => 'boruto',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum iure praesentium consequuntur non ut atque sunt incidunt porro voluptate delectus, maiores inventore libero fuga ',
            'image' => '/novel/img-2.png',
            'creator' => 'Khisimoto',
            'year_published' => $year_published,
            'admin_id' => 1,
            'genre_id' => 1,
        ]);
        Novel::create([
            'title' => 'Saruto',
            'slug' => 'saruto',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum iure praesentium consequuntur non ut atque sunt incidunt porro voluptate delectus, maiores inventore libero fuga minus eaque! Odit illo ',
            'image' => '/novel/img-3.png',
            'creator' => 'Khisimoto',
            'year_published' => $year_published,
            'admin_id' => 1,
            'genre_id' => 1,
        ]);
    }
}
