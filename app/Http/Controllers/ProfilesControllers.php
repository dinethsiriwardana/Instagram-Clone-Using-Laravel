<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Intervention\Image\Facades\Image;

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
        
        
        if (request('image')) {
            
            $imagePath = (request('image')->store('profile','public'));
            
            $image = Image::make(public_path("storage/{$imagePath}")) -> fit(1000,1000);
            
            $image->save();
              
            $imageArray =  ['image'  => $imagePath];
        }

        auth()->user()->profile->update( 
            array_merge(
                $data,
                $imageArray ?? []
            ) 
    ); 
        return redirect("/profile/{$user->id}");
    }
}
 