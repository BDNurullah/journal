<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Image;
use File;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     const UPLOAD_DIR = '/uploads/home-slider-image/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::indexProduct();
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        var_dump($request);exit;
        $request->validate([
            //'Title' => 'required|max:255',
            'Description' => 'required',
            'ImageUrl' => 'required|mimes:jpeg,png,jpg',
        ]);

        if($request->hasFile('ProductImage')){
            $homeSlideImage = $this->upload($request->ImageUrl, 'home-slider-image');
        }
        $data = array([
            'Title' => $request->input('Title'),
            'Description' => $request->input('Description'),
            'ActiveStatus' => $request->input('ActiveStatus')?:0,
            'ImageUrl' => $homeSlideImage,
            'CreateBy' => Auth::user()->id
        ]);

        Homeslider::insertHomeSlide($data);

        session()->flash('message', 'Home slider Inserted Successfully');
        return redirect('admin/homesliders');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
