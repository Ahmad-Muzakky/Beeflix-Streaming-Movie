<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class movieseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'title' => 'Game Of Throne',
            'genre_id' => '1',
            'image' => 'gameofthrone.jpg',
            'description' =>'Nine noble families wage war against each other in order to gain control over the mythical land of Westeros. Meanwhile, a force is rising after millenniums and threatens the existence men.', 
            'rating' => '5',
        ]);
        DB::table('movies')->insert([
            'title' => 'Vagabond',
            'genre_id' => '1',
            'image' => 'vagabond.jpg',
            'description' =>'A stuntman involved in a tragic airplane crash ends up discovering a national corruption scandal in the process.', 
            'rating' => '5',
        ]);
        DB::table('movies')->insert([
            'title' => 'Touch Your Heart',
            'genre_id' => '1',
            'image' => 'touchyourheart.jpg',
            'description' =>'A famous actress, gets caught in a scandal with a son of a rich family; with her career declining quickly, she looks for one last hope to get back on the screen and lands a role playing.', 
            'rating' => '4',
        ]);
        DB::table('movies')->insert([
            'title' => 'Avatar: The Last Airbender',
            'genre_id' => '2',
            'image' => 'avatar.jpg',
            'description' =>'A young boy with the ability to manipulate natural elements wakes up from a 100-year-long hibernation. He then sets off to use his mystical powers and save the world from destruction.', 
            'rating' => '5',
        ]);
        DB::table('movies')->insert([
            'title' => 'Naruto',
            'genre_id' => '2',
            'image' => 'naruto.jpg',
            'description' =>'Naruto is a Japanese manga series written and illustrated by Masashi Kishimoto. It tells the story of Naruto Uzumaki, a young ninja who seeks recognition from his peers and dreams ', 
            'rating' => '5',
        ]);
        DB::table('movies')->insert([
            'title' => 'Adventure Time',
            'genre_id' => '2',
            'image' => 'adventuretime.jpg',
            'description' =>'Twelve- year-old Finn battles evil in the Land of Ooo. Assisted by his magical dog, Jake, Finn roams the Land of Ooo righting wrongs and battling evil.', 
            'rating' => '5',
        ]);
        DB::table('movies')->insert([
            'title' => 'The Witcher',
            'genre_id' => '3',
            'image' => 'thewitcher.jpg',
            'description' =>'The witcher Geralt, a mutated monster hunter, struggles to find his place in a world in which people often prove more wicked than beasts.', 
            'rating' => '4',
        ]);
        DB::table('movies')->insert([
            'title' => 'Walking Dead',
            'genre_id' => '3',
            'image' => 'walkingdead.jpg',
            'description' =>'A group of survivors led by police officer Rick Grimes travel in search of a safe and secure home after a zombie apocalypse spreads across the USA.', 
            'rating' => '4',
        ]);
        DB::table('movies')->insert([
            'title' => 'Level Up',
            'genre_id' => '3',
            'image' => 'levelup.jpg',
            'description' =>'Level Up is a 2019 South Korean television series starring Sung Hoon, Han Bo-reum, Cha Sun-woo, Kang Byul and Danny Ahn. It aired from July 10 to August 15, 2019 on Wednesdays', 
            'rating' => '4.5',
        ]);
        
    }
}
