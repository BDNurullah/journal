<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductType;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Image;
use File;

class ProductTypeController extends Controller
{
    const UPLOAD_DIR = '/uploads/home-slider-image/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productType = ProductType::indexProductType();
        return view('admin.productType.index',compact('productType'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productType.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Type' => 'required|max:255'
        ]);

        $data = array([
            'Type' => $request->input('Type'),
            'ActiveStatus' => $request->input('ActiveStatus')?:0,
            'CreateBy' => Auth::user()->id
        ]);

        ProductType::insertProductType($data);

        session()->flash('message', 'Product Type Inserted Successfully');
        return redirect('admin/productType');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function show(ProductType $productType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editProductType = ProductType::editProductType($id);
        return view('admin.productType.edit',compact('editProductType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        var_dump($request);exit;
        $request->validate([
            'Type' => 'required|max:255'
        ]);

        ProductType::updateProductType($request, $id);

        session()->flash('message', 'Product Type Updated Successfully');
        return redirect('admin/productType');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductType $productType)
    {
        ProductType::deleteProductType($id);

        session()->flash('message', 'Product Type Deleted Successfully');
        return redirect('admin/productType');
    }
}