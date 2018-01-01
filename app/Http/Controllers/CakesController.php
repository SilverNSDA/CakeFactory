<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cakes;

class CakesController extends Controller
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
        $cakes = cakes::orderBy('name','desc')->paginate(10);
        return view('Admin/Cakes/index')->with('cakes',$cakes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin\Cakes\create');
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
        $this->validate($request, [
            'name' =>'required',
            'type' =>'required',
            'description'=>'required',
            'price'=>'numeric'
        ]);
        $cake = new Cakes;
        $cake->name=$request->input('name');
        $cake->price=$request->input('price');
        $cake->description=$request->input('description');
        $cake->base_type=$request->input('type');
        $cake->in_storage=0;
        $cake->save();
        return redirect('/admin/cakes')->with('success','You have made a cake');

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
        $cake = cakes::find($id);
        return view('Admin.Cakes.show')->with('cake',$cake);
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
        $cake = Cakes::find($id);
        return view('Admin.Cakes.edit')->with('cake',$cake);
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
        $this->validate($request, [
            'name' =>'required',
            'type' =>'required',
            'description'=>'required',
            'price'=>'numeric'
        ]);
        $cake = Cakes::find($id);
        $cake->name=$request->input('name');
        $cake->price=$request->input('price');
        $cake->description=$request->input('description');
        $cake->base_type=$request->input('type');
        $cake->save();
        return redirect('/admin/cakes')->with('success','You have changed a cake');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $cake = cakes::find($id);
        $cake->delete();
        return redirect('/admin/cakes')->with('success','Cake deleted');
    }
}
