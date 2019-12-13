<?php

namespace App\Http\Controllers;

use App\Image;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class PolymorphicOneToOneController extends Controller
{
    public function index()
    {
    	$imageForPost = new Image(['url' => 'https://via.placeholder.com/150/0000FF/808080 ?Text=Post']);
    	$imageForUser = new Image(['url' => 'https://via.placeholder.com/150/0000FF/808080 ?Text=User']);

    	$post = Post::create([
    		'title' => 'Sample Title' . rand(1,999),
    		'body' => 'Sample Body'
    	]);
    	$user = User::create([
			'name'     => 'Christopher' . rand(1, 999),
			'email'    => 'chris' . rand(1, 999) . '@yahoo.com',
			'password' => bcrypt(1234),
    	]);

    	$post->image()->save($imageForPost);

    	$user->image()->save($imageForUser);

    	$posts = Post::all();
    	$users = User::all();
    	return view('polymorphic.one-to-one.index', compact('posts', 'users'));
    }
}
