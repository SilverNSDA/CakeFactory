<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\cakes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cart = Cart::with(['owner'=>function($user){
            $user->find(Auth::user()->id);
        }])->get();
        return view('customer_side.index')->with('cart',$cart);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $count =0;
        $user_id=$request->input('user_id');
        $cakes_id=$request->input('cakes_id');
        $cart = Cart::where('user_id',$user_id)->where('cakes_id',$cakes_id)->get();
        if(!$cart->isEmpty()){
            $cart=$cart->first();
            $cart->amount+=1;
            $cart->save();
            $count=$cart->amount;
        }
        else{
            $cart=new Cart;
            $cart->user_id=$user_id;
            $cart->cakes_id=$cakes_id;
            $cart->amount=1;
            $cart->save();
            $count=$cart->amount;
        }
        return redirect()->to(URL::previous().'#kanban')->with('success','Cart now has '.$count.' '.cakes::find($cakes_id)->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function del($id){
        $cart= Cart::find($id);
        $cart->delete();
        return True;
    }
    public function destroy($id)
    {
        //
        $this->del($id);
        return redirect('/cart');
    }
    public function clearCart($id){

        $items=Cart::where('user_id',$id)->get();
        foreach($items as $item){
            
            $this->del($item->id);
        }
        return redirect('/cart');
    }
}
