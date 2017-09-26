<?php

use Illuminate\Database\Seeder;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into threads (title, body, user_id) values (?, ?, ?)', ["Hola amigo", 'Hola amigo jeg hedder gretar Helgason', 1]);

        DB::insert('insert into threads (title, body, user_id) values (?, ?, ?)', ["Hello Amigo", 'hello hundur', 1]);

        DB::insert('insert into threads (title, body, user_id) values (?, ?, ?)', ["Hiii amigo", 'hiii gamliii refurrrrrrrrrrrrr', 1]);

        DB::insert('insert into threads (title, body, user_id) values (?, ?, ?)', ["hallo amigo", 'hallooo gjemllliiii', 1]);

        DB::insert('insert into threads (title, body, user_id) values (?, ?, ?)', ["heyy amigo", 'heyyy boiiiiiiiiiiii', 1]);
    }
}
