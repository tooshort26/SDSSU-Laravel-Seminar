<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class OneToManyController extends Controller
{
    public function index()
    {
    	$posts = Post::with(['comments'])->get();
    	return view('one-to-many.index', compact('posts'));
    }
}
