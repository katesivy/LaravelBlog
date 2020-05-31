<?php

use Illuminate\Database\Seeder;
use App\Post;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(BlogPostsSeeder::class);
        // $this->call(WeeksSeeder::class);
        $this->call(PostsSeeder::class);
    }
}
