<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Genre;
use App\Models\User;
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
        Genre::create([
            'name' => 'Action',
            'admin_id' => 1,
        ]);
        Novel::create([
            'title' => 'Naruto',
            'slug' => 'naruto',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum iure praesentium consequuntur non ut atque sunt incidunt porro voluptate delectus, maiores inventore libero fuga minus eaque! Odit illo inventore sit.',
            'image' => '/novel-img/img-1.jpeg',
            'creator' => 'Khisimoto',
            'year_published' => $year_published,
            'admin_id' => 1,
            'genre_id' => 1,
        ]);
        Novel::create([
            'title' => 'Boruto',
            'slug' => 'boruto',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum iure praesentium consequuntur non ut atque sunt incidunt porro voluptate delectus, maiores inventore libero fuga ',
            'image' => '/novel-img/img-2.jpeg',
            'creator' => 'Khisimoto',
            'year_published' => $year_published,
            'admin_id' => 1,
            'genre_id' => 1,
        ]);
        Novel::create([
            'title' => 'Saruto',
            'slug' => 'saruto',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum iure praesentium consequuntur non ut atque sunt incidunt porro voluptate delectus, maiores inventore libero fuga minus eaque! Odit illo ',
            'image' => '/novel-img/img-3.jpeg',
            'creator' => 'Khisimoto',
            'year_published' => $year_published,
            'admin_id' => 1,
            'genre_id' => 1,
        ]);
    }
}
