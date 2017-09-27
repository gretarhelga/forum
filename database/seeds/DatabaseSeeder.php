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
    }
}
