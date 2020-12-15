<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class genreseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'genre_name' => 'Drama',
        ]);
        DB::table('genres')->insert([
            'genre_name' => 'Kids',
        ]);
        DB::table('genres')->insert([
            'genre_name' => 'TV Show',
        ]);

    }
}
