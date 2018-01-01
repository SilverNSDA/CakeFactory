<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cates = Category::orderBy('name','desc')->paginate(10);
        return view('Admin/Category/index')->with('cates',$cates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin\Catesgory\create');
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
            'name'=>'required',
            'tag'=>'required'

        ]);
        $cate=new Category;
        $cate->name=$request->input('name');
        $cate->tag=$request->input('tag');
        $cate->description=$request->input('description');
        $cate->save();
        return redirect('Admin/Categories')->with('success','Category created');
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
        $cate=Category::find($id);
        return view('Admin.Category.show')->with('cate',$cate);
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
        $cate=Category::find($id);
        return view('Admin.Category.edit')->with('cate',$cate);
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
            'name'=>'required',
            'tag'=>'required'

        ]);
        $cate=Category::find($id);
        $cate->name=$request->input('name');
        $cate->tag=$request->input('tag');
        $cate->description=$request->input('description');
        $cate->save();
        return redirect('Admin/Categories')->with('success','Category updated');
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
        $cate=Category::find($id);
        $cate->delete();
        return redirect('admin/categories')->with('success','Category deleted');
    }
}
