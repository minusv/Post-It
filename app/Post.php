<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Creating relation between User model and Post model.
    public function user(){
        return $this->belongsTo('App\User');
    }
}
