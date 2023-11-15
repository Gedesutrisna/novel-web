<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Admin;
use App\Models\Genre;
use App\Models\Novel;
use App\Models\Review;
use App\Models\Episode;
use App\Models\ReplyReview;
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
        Genre::create([
            'name' => 'Adventure',
            'admin_id' => 1,
        ]);
        Genre::create([
            'name' => 'Fight',
            'admin_id' => 1,
        ]);
        Genre::create([
            'name' => 'Horor',
            'admin_id' => 1,
        ]);
        Novel::create([
            'title' => 'Naruto',
            'slug' => 'naruto',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum iure praesentium consequuntur non ut atque sunt incidunt porro voluptate delectus, maiores inventore libero fuga minus eaque! Odit illo inventore sit.',
            'image' => '/novel/comic-1.svg',
            'creator' => 'Khisimoto',
            'year_published' => $year_published,
            'admin_id' => 1,
            'genre_id' => 1,
        ]);
        Novel::create([
            'title' => 'Boruto',
            'slug' => 'boruto',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum iure praesentium consequuntur non ut atque sunt incidunt porro voluptate delectus, maiores inventore libero fuga ',
            'image' => '/novel/comic-2.svg',
            'creator' => 'Khisimoto',
            'year_published' => $year_published,
            'admin_id' => 1,
            'genre_id' => 2,
        ]);
        Novel::create([
            'title' => 'Saruto',
            'slug' => 'saruto',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum iure praesentium consequuntur non ut atque sunt incidunt porro voluptate delectus, maiores inventore libero fuga minus eaque! Odit illo ',
            'image' => '/novel/comic-3.svg',
            'creator' => 'Khisimoto',
            'year_published' => $year_published,
            'admin_id' => 1,
            'genre_id' => 3,
        ]);
        Novel::create([
            'title' => 'yu gi oh',
            'slug' => 'yugioh',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum iure praesentium consequuntur non ut atque sunt incidunt porro voluptate delectus, maiores inventore libero fuga minus eaque! Odit illo ',
            'image' => '/novel/comic-4.svg',
            'creator' => 'Khisimoto',
            'year_published' => $year_published,
            'admin_id' => 1,
            'genre_id' => 4,
        ]);
        Novel::create([
            'title' => 'dragon ball',
            'slug' => 'dragonball',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum iure praesentium consequuntur non ut atque sunt incidunt porro voluptate delectus, maiores inventore libero fuga minus eaque! Odit illo ',
            'image' => '/novel/comic-5.svg',
            'creator' => 'Khisimoto',
            'year_published' => $year_published,
            'admin_id' => 1,
            'genre_id' => 5,
        ]);
        Novel::create([
            'title' => 'bleach',
            'slug' => 'bleach',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum iure praesentium consequuntur non ut atque sunt incidunt porro voluptate delectus, maiores inventore libero fuga minus eaque! Odit illo ',
            'image' => '/novel/comic-6.svg',
            'creator' => 'Khisimoto',
            'year_published' => $year_published,
            'admin_id' => 1,
            'genre_id' => 1,
        ]);
        Novel::create([
            'title' => 'ninja hatori',
            'slug' => 'ninjahatrori',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum iure praesentium consequuntur non ut atque sunt incidunt porro voluptate delectus, maiores inventore libero fuga minus eaque! Odit illo ',
            'image' => '/novel/comic-7.svg',
            'creator' => 'Khisimoto',
            'year_published' => $year_published,
            'admin_id' => 1,
            'genre_id' => 1,
        ]);
        Novel::create([
            'title' => 'Saruto',
            'slug' => 'saruto',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum iure praesentium consequuntur non ut atque sunt incidunt porro voluptate delectus, maiores inventore libero fuga minus eaque! Odit illo ',
            'image' => '/novel/comic-8.svg',
            'creator' => 'Khisimoto',
            'year_published' => $year_published,
            'admin_id' => 1,
            'genre_id' => 1,
        ]);
        Novel::create([
            'title' => 'one piece',
            'slug' => 'onepiece',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum iure praesentium consequuntur non ut atque sunt incidunt porro voluptate delectus, maiores inventore libero fuga minus eaque! Odit illo ',
            'image' => '/novel/comic-9.svg',
            'creator' => 'Khisimoto',
            'year_published' => $year_published,
            'admin_id' => 1,
            'genre_id' => 1,
        ]);
        Novel::create([
            'title' => 'OPM',
            'slug' => 'opm',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum iure praesentium consequuntur non ut atque sunt incidunt porro voluptate delectus, maiores inventore libero fuga minus eaque! Odit illo ',
            'image' => '/novel/comic-10.svg',
            'creator' => 'Khisimoto',
            'year_published' => $year_published,
            'admin_id' => 1,
            'genre_id' => 1,
        ]);
        Episode::create([
            'name' => 'Naruto EPS 1',
            'number' => '1',
            'release' => $year_published,
            'file_pdf' => '/file_novel/pdf1.pdf',
            'image' => '/episode/comic-chapter-1.svg',
            'novel_id' => 1,
            'admin_id' => 1,
        ]);
        Episode::create([
            'name' => 'Naruto EPS 2',
            'number' => '2',
            'release' => $year_published,
            'file_pdf' => '/file_novel/pdf1.pdf',
            'image' => '/episode/comic-chapter-2.svg',
            'novel_id' => 1,
            'admin_id' => 1,
        ]);
        Episode::create([
            'name' => 'Naruto EPS 3',
            'number' => '3',
            'release' => $year_published,
            'file_pdf' => '/file_novel/pdf1.pdf',
            'image' => '/episode/comic-chapter-3.svg',
            'novel_id' => 1,
            'admin_id' => 1,
        ]);
        Episode::create([
            'name' => 'Naruto EPS 4',
            'number' => '4',
            'release' => $year_published,
            'file_pdf' => '/file_novel/pdf1.pdf',
            'image' => '/episode/comic-chapter-4.svg',
            'novel_id' => 1,
            'admin_id' => 1,
        ]);
        Episode::create([
            'name' => 'Naruto EPS 5',
            'number' => '5',
            'release' => $year_published,
            'file_pdf' => '/file_novel/pdf1.pdf',
            'image' => '/episode/comic-chapter-5.svg',
            'novel_id' => 1,
            'admin_id' => 1,
        ]);
        Episode::create([
            'name' => 'Naruto EPS 6',
            'number' => '6',
            'release' => $year_published,
            'file_pdf' => '/file_novel/pdf1.pdf',
            'image' => '/episode/comic-chapter-6.svg',
            'novel_id' => 1,
            'admin_id' => 1,
        ]);
        Episode::create([
            'name' => 'Naruto EPS 7',
            'number' => '7',
            'release' => $year_published,
            'file_pdf' => '/file_novel/pdf1.pdf',
            'image' => '/episode/comic-chapter-7.svg',
            'novel_id' => 1,
            'admin_id' => 1,
        ]);
        Episode::create([
            'name' => 'Naruto EPS 8',
            'number' => '8',
            'release' => $year_published,
            'file_pdf' => '/file_novel/pdf1.pdf',
            'image' => '/episode/comic-chapter-8.svg',
            'novel_id' => 1,
            'admin_id' => 1,
        ]);
        Review::create([
            'comment' => 'Komiknya bauk bli, niat bikin komik ga sii.',
            'user_id' => 1,
            'episode_id' => 1,
        ]);
        Review::create([
            'comment' => 'Komiknya bauk bli, niat bikin komik ga sii.',
            'user_id' => 1,
            'episode_id' => 1,
        ]);
        Review::create([
            'comment' => 'Komiknya bauk bli, niat bikin komik ga sii.',
            'user_id' => 1,
            'episode_id' => 1,
        ]);
        ReplyReview::create([
            'comment' => 'Komiknya bauk bli, niat bikin komik ga sii.',
            'user_id' => 1,
            'review_id' => 1,
        ]);
    }
}