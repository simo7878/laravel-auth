<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {
        $newPost = new Post;
        $newPost->user_id = 1;
        $newPost->

      }
    }
}
