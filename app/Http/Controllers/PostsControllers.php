<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class PostsControllers extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            
            'caption'=>'required',
            'image'=>['required','image'],
        ]);

        // auth()->user()->posts()->create($data);

        // $data = [    'title' => 'News Title',    'caption' => 'News Caption',    'image' => '/path/to/image',];

        auth()->user()->posts()->create($data);


        /*
        As Same as the
        $post = new \App\Models\Post();
        $post->caption = $data['caption'];
        $post->save();
        */

        dd(request()->all());;
    }
}