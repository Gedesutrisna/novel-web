<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NovelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('novels')->insert([
        'id' => '1',
        'title' => 'Naruto',
        'slug' => 'asdadasdasd',
        'description' => 'asdadhhjadagdhagdjhasgdashad',
        'image' => 'icon.svg',
        'creator' => 'Agus',
        'admin_id' => '2',
        'genre_id' => '1'
        ]);
    }
}
