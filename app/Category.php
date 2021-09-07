<?php

namespace App;
use App\Post;
use App\Comment;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $guarded = [];
    public function posts(){
        return $this->hasMany(Post::class);
    }
    public function getRouteKeyName(){
        return 'slug';
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
