<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chefs extends Model
{
    //
    public function cakes(){
        return $this->hasMany('App\cakes');
    }
}
