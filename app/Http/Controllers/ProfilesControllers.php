<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesControllers extends Controller
{
    public function index()
    {
        return view('home');
    }
}
