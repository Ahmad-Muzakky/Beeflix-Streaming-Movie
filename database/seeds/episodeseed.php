<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class episodeseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert([
            'title' => 'Game Of Throne',
            'movie_id' => '1', 
            'episode' => '3'
        ]);
        DB::table('episodes')->insert([
            'title' => 'Vagabond',
            'movie_id' => '2', 
            'episode' => '3'
        ]);
        DB::table('episodes')->insert([
            'title' => 'Touch Your Heart',
            'movie_id' => '3', 
            'episode' => '3'
        ]);
        DB::table('episodes')->insert([
            'title' => 'Avatar: The Last Airbender',
            'movie_id' => '4', 
            'episode' => '3'
        ]);
        DB::table('episodes')->insert([
            'title' => 'Naruto',
            'movie_id' => '5', 
            'episode' => '3'
        ]);
        DB::table('episodes')->insert([
            'title' => 'Adventure Time',
            'movie_id' => '6', 
            'episode' => '3'
        ]);
        DB::table('episodes')->insert([
            'title' => 'The Witcher',
            'movie_id' => '7', 
            'episode' => '3'
        ]);
        DB::table('episodes')->insert([
            'title' => 'Walking Dead',
            'movie_id' => '8', 
            'episode' => '3'
        ]);
        DB::table('episodes')->insert([
            'title' => 'Level Up',
            'movie_id' => '9', 
            'episode' => '3'
        ]);

    }
}
