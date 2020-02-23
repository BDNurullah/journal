<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        //return view('website.home');
        $products = DB::table('product')
         ->select('product.*')
         ->where('product.ActiveStatus','=',1)
         ->orderBy('ProductID','asc')
         ->get();
        return view('portal.home',compact('products'));
    }
    public function shop() {
        //return view('website.home');
        $products = DB::table('product')
         ->select('product.*')
         ->where('product.ActiveStatus','=',1)
         ->orderBy('ProductID','asc')
         ->get();
        return view('portal.shop',compact('products'));
    }
    public function details($id) {
        //return view('website.details');
        $products = DB::table('product')
         ->select('product.*')
         ->where('product.ActiveStatus','=',1)
         ->where('product.ProductID','=',$id)
         ->orderBy('ProductID','asc')
         ->first();
        return view('portal.details',compact('products'));
    }
    public function cart($id) {
        //return view('website.details');
        $products = DB::table('product')
         ->select('product.*')
         ->where('product.ActiveStatus','=',1)
         ->where('product.ProductID','=',$id)
         ->orderBy('ProductID','asc')
         ->first();
        return view('portal.cart',compact('products'));
    }
    public function order(Request $request) {
        $request->validate([
            'product' => 'required',
            'quantity' => 'required',
            'fullName' => 'required',
            'mobile' => 'required',
        ]);
        $productID = $request->input('product');
        $info = DB::table('product')
                ->select('product.*')
                ->where('product.ProductID','=',$productID)
                ->first();
        if($info){
            $orderData = array([
                'ProductID' => $info->ProductID,
                'ProductCode' => $info->Code,
                'ProductName' => $info->Name,
                'UnitPrice' => $info->Price,
                'Quantity' => $request->input('quantity'),
                'PayablePrice' => $info->Price * $request->input('quantity'),
                'FullName' => $request->input('fullName'),
                'Email' => $request->input('email'),
                'Mobile' => $request->input('mobile'),
                'DeliveryAddress' => $request->input('address')
            ]);
            $statement =  DB::table('order')->insert($orderData);
            
            return redirect('orderSubmint');
        }
    }
    
    public function orderSubmint() {
        return view('portal.order');
    }
}
