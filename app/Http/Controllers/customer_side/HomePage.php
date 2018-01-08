<?php

namespace App\Http\Controllers\customer_side;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cakes;
use Illuminate\Support\Facades\DB;


class HomePage extends Controller
{
    //
    public function index(){

        $cakes= cakes::leftJoin('comments','cakes.id','=','comments.id')
        ->orderBy(max(cakes::class,'comments.created_at'),'desc')->groupBy('cakes.id')->paginate(6);
        // return $cakes;
        return view('customer_side.home')->with('cakes',$cakes);

    }
}
