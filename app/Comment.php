<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function blogPost(){

        return $this->belongsTo('App\BlogPost');
    }
}
