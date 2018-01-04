<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    public function owner(){
        return $this->belongsTo('App\User');
    }
    public function content(){
        return $this->belongsToMany('App\cakes','carts','cakes_id');
    }
}
