<?php

namespace Database\Seeders;

use App\Models\Episode;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('episodes')->insert([
            'name' => 'naruto',
            'number' => '1',
            'image' => 'batu,jpg',
            'file_pdf' => '1',
            'novel_id' => '1',
            'admin_id' => '1'
        ]);
    }
}
