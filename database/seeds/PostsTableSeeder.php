<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
        	'user_id' => 1,
            'title' => str_random(100),
            'description' => str_random(250)
        ]);
        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => str_random(100),
            'description' => str_random(250)
        ]);
    }
}
