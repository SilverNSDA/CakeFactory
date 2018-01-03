<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function cakes(){
        return $this->belongsToMany('App\cakes');
    }
}
