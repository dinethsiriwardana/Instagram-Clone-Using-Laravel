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

// 
        $imagePath = (request('image')->store('uploads','public'));
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        /*
        As Same as the
        $post = new \App\Models\Post();
        $post->caption = $data['caption'];
        $post->save();
        */

        return redirect('/profile/'. auth()->user()->id);
    }
}