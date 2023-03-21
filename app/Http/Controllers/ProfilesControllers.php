<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class ProfilesControllers extends Controller
{
    public function index(User $user)

    {
        return view('profiles.index',compact('user')); //home.blade.php
    }

    public function edit(User $user)
    {
        $this->authorize('update',$user->profile);
        return view('profiles.edit',compact('user'));
    }

    public function update(User $user){

        $this->authorize('update',$user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => '',
            'image' => '',
        ]);
        auth()->user()->profile->update($data);
        return redirect("/profile/{$user->id}");
    }
}
 