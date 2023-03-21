<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class ProfilesControllers extends Controller
{
    public function index($user)

    {
        // dd($user);
        $user = User::find($user);
        return view('home',['user'=>$user,]); //home.blade.php
    }
}
