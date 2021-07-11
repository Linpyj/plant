<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function User() {
        $this->belongsTo('App\Post');
    }
}
