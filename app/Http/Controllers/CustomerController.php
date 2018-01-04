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
        return view('customer_side.show')->with('cake',$cake);
    }
}
