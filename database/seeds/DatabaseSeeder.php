<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(genreseed::class);
        $this->call(movieseed::class);
        $this->call(episodeseed::class);
    }
}
