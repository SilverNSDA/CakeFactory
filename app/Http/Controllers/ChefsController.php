<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chefs;

class ChefsController extends Controller
{
    public function __construct()
    {
        $this->middleware('Admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $chefs = Chefs::orderBy('Firstname','desc')->paginate(10);
        return view('Admin/Chef/index')->with('chefs',$chefs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin\Chef\create');
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
        $this->validate($request,[
            'lastname'=>'required',
            'firstname'=>'required'
        ]);
        $chef = new Chefs; 
        $chef->Firstname=$request->input('firstname');
        $chef->Lastname=$request->input('lastname');
        $chef->Middlename=$request->input('middlename');
        $chef->Title=$request->input('title');
        $chef->Mobile=$request->input('mobile');
        $chef->Home_phone=$request->input('home_phone');
        $chef->Fax=$request->input('fax');
        $chef->Address1=$request->input('address1');
        $chef->Address2=$request->input('address2');
        $chef->save();
        return redirect('admin/chefs')->with('success','Chef created');
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
        $chef=Chefs::find($id);
        return view('Admin.Chef.show')->with('chef',$chef);
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
        $chef=Chefs::find($id);
        return view('Admin.Chef.edit')->with('chef',$chef);
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
        $this->validate($request,[
            'lastname'=>'required',
            'firstname'=>'required'
        ]);
        $chef = Chefs::find($id); 
        $chef->Firsname=$request->input('firstname');
        $chef->Lastname=$request->input('lastname');
        $chef->Middlename=$request->input('middlename');
        $chef->Title=$request->input('title');
        $chef->Mobile=$request->input('mobile');
        $chef->Home_phone=$request->input('home_phone');
        $chef->Fax=$request->input('fax');
        $chef->Address1=$request->input('address1');
        $chef->Address2=$request->input('address2');
        $chef->save();
        return redirect('admin/chefs')->with('success','Chef updated');
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
        $chef= Chefs::find($id);
        $chef->delete();
        return redirect('admin/chefs')->with('success','Chef deleted');
    }
}
