<?php

namespace App\Http\Controllers;

use App\Post;
use App\UserComment;
use App\Video;
use Illuminate\Http\Request;

class PolymorphicOneTomanyController extends Controller
{
    public function post()
    {
    	$comments = [];
    	
    	foreach (range(1, 5) as $value) {
    	    $comments[] = new UserComment([
    	    	'body' => 'This is the comment body' . rand(1, 999),
    	    	'title' => 'This is the comment title' . rand(1, 999)
    	    ]);
    	}

    	$post = Post::create([
    		'title' => 'This is the title ' . rand(1,999),
    		'body' => 'This is the body ' . rand(1,999),
    	]);

        $post->user_comments()->saveMany($comments);

        $posts = Post::all();
    	
        return view('polymorphic.one-to-many.post', compact('posts'));
    }

    public function video()
    {
        $comments = [];
        
        foreach (range(1, 5) as $value) {
            $comments[] = new UserComment([
                'body' => 'This is the comment body' . rand(1, 999),
                'title' => 'This is the comment title' . rand(1, 999)
            ]);
        }

        $video = Video::create([
            'title' => 'This is the title' . rand(1, 999),
            'url' => 'www.youtube.com/sample/video?id=' . md5('testing'),
        ]);

        $video->user_comments()->saveMany($comments);

        $videos = Video::all();
        return view('polymorphic.one-to-many.video', compact('videos'));
    }
}
