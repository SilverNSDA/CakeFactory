<?php

namespace App\Http\Controllers\customer_side;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cakes;


class HomePage extends Controller
{
    //
    public function index(){

        $cakes=cakes::paginate(6);
        return view('customer_side.home')->with('cakes',$cakes);

    }
}
