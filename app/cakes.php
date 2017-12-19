<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cakes extends Model
{
    //
    public function chef(){
        return $this->belongTo('App/Chefs');
    }
    public function categories(){
        return $this->belongToMany('App/Category');
    }
}
