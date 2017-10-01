<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //App\Post::maybelline()
    public function scopeMaybelline($query)
    {
        return $query->where('company_name','Maybelline')->get();
    }
}
