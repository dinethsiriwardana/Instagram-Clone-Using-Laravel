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

    public function edit(User $user){
        return view('profiles.edit',compact('user'));
    }
}
 