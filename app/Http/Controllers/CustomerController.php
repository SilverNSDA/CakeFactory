<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cakes;
use App\User;

class CustomerController extends Controller
{
    //
    public function show($id){
        $cake=cakes::find($id);
        $comments = $cake->comments()->orderBy('updated_at','desc')->paginate(3);
        return view('customer_side.show',['cake'=>$cake, 'comments'=>$comments]);
    }
}
