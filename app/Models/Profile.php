<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = []; 

    public function profileImage()
    {
        $imgPath = ($this->image) ? ('/storage/'.$this->image) : '/assets/dProfile.jpg' ;
         return $imgPath;
    }

    public  function followers(){
        return $this->belongsToMany(User::class);
    }


    public function user(){
        return $this->belongsTo(User::class);
    } 
}
