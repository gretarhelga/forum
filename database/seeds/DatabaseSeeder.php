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
        DB::table('users')->insert([
            'name' => "Gretar",
            'email' => "gretar95@gmail.com",
            'password' => bcrypt('123456'),
        ]);

        DB::table("threads")->insert([
            ["title" => "hola amigo", "body" => "holaa amiog hvern er du?", "user_id" => 1],
            ["title" => "hæ amigo", "body" => "hæ amiog hvern er du?", "user_id" => 1],
            ["title" => "oi amigo", "body" => "oi amiog hvern er du?", "user_id" => 1],
            ["title" => "hey amigo", "body" => "hey amiog hvern er du?", "user_id" => 1],
            ["title" => "hi amigo", "body" => "hi amiog hvern er du?", "user_id" => 1],
            ["title" => "hello amigo", "body" => "hello amiog hvern er du?", "user_id" => 1]
        ]);


        DB::table('leikstjori')->insert([
            ['nafn' => "Gretar",'thjoderni' => "island"],
            ['nafn' => "Sammi",'thjoderni' => "island"],
            ['nafn' => "Baldur",'thjoderni' => "island"],
            ['nafn' => "Dimitri",'thjoderni' => "russland"]
        ]);

        DB::table("dvd")->insert([
            ["titill" => "Batman", "adalleikari" => "Ben", "utgafuar" => 1995, "verd" => 1000, "flokkur" => "spennu", "leikstjori_id" => 1],
            ["titill" => "Superman", "adalleikari" => "Jones", "utgafuar" => 1996, "verd" => 2500, "flokkur" => "Hryllings", "leikstjori_id" => 2],
            ["titill" => "Spiderman", "adalleikari" => "Hillary", "utgafuar" => 1937, "verd" => 3697, "flokkur" => "Hasar", "leikstjori_id" => 3],
            ["titill" => "Spy kids", "adalleikari" => "Sam", "utgafuar" => 2006, "verd" => 6559, "flokkur" => "Drama", "leikstjori_id" => 4],
            ["titill" => "X men", "adalleikari" => "Damion", "utgafuar" => 1967, "verd" => 7895, "flokkur" => "spennu", "leikstjori_id" => 2],
            ["titill" => "Harry Potter", "adalleikari" => "Santa", "utgafuar" => 1879, "verd" => 1563, "flokkur" => "Hasar", "leikstjori_id" => 3],
        ]);
    }
}
