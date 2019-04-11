<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::latest()->get();
    	return view('post',compact('posts'));
    }

    public function create()
    {
    	return view('createpost');
    }

    public function store()
    {
    	$this->validate(request(),[

    		'title'=>'required',
    		'body' => 'required'
    	]);


    	Post::create([

    		'title' => request('title'),

    		'body' => request('body')
    	]);


    	return redirect('/');

    }


    public function show(Post $id)
    {
    	return view('view',compact('id','a'));
    }
}