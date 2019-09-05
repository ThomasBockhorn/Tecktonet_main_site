<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPostsModels extends Model
{
    public function comments()
    {
        return $this->hasMany('App\Comments', 'post_id', 'id');
    }
}