<?php

use App\Comment;
use App\Post;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::all()->each(function ($post) {
        	foreach (range(1, 5) as $value) {
        		Comment::create([
        			'post_id' => $post->id,
        			'message' => "Comment message {$post->id}-{$value}",
        		]);
        	}
        });
    }
}
