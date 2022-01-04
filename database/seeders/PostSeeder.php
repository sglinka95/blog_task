<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()
            ->times(50)
            ->create()
            ->each(function($post) {
                $post->comments()->saveMany(
                    Comment::factory()->times(rand(6, 20))->make()   
                );
            });
    }
}
