<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class ProfilesControllers extends Controller
{
    public function index($user)

    {
        
        $user = User::findOrFail($user);

        return view('profiles.index',['user'=>$user,]); //home.blade.php
    }
}
 