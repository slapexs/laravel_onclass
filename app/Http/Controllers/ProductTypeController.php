<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_types = ProductType::all();

        return view('product_type.index')->with('product_types', $product_types);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Check input
        $rules = [
            'name' => 'required'
        ];

        $request->validate($rules);
        $product_type = new ProductType();
        $product_type->name = $request->name;
        $product_type->save();

        return redirect()->route('product_types.index')->with('status', 'เพิ่มประเภทสินค้าสำเร็จ');
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
        $product_type = ProductType::find($id);
        return view('product_type.edit')->with('product_type', $product_type);
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
        $rules = [
            'name' => 'required',
        ];

        $request->validate($rules);
        $product_type = ProductType::find($id);
        $product_type->name = $request->name;
        // $product_type->update($request->all());
        $product_type->save();
       

        return redirect()->route('product_types.index')->with('status', 'แก้ไขประเภทสินค้าสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        ProductType::destroy($id);
        return back();
        
    }
}
