<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function post()
    {
        return $this->belongsTo('App\BlogPostsModels');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}