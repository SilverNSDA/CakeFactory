<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cakes extends Model
{
    //
    public function chef(){
        return $this->belongsTo('App\Chefs');
    }
    public function categories(){
        return $this->belongsToMany('App\Category');
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
