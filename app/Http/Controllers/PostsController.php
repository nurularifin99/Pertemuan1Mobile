<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index(){
    	return view('posts.index');
    }

    public function create(){
    	return view('posts.create');
    }

    public function store(){

    	$this->validate(request(), 
    	[
    		'title' => 'required',
    		'body' => 'required'
    	]);

    	Post::create(request(['title', 'body']));    	
    	return redirect('/');
    }
}
