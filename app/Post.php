<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id','company_name','title','content'];
    protected $fillable = ['created_at','updated_at'];
    //App\Post::maybelline()
    public function scopeMaybelline($query)
    {
        return $query->where('company_name','Maybelline')->get();
    }
}
