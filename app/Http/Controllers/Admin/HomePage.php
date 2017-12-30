<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePage extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home(){
        return view('Admin/HomePage');
    }
    public function index(){
        return redirect('/admin');
    }


}
