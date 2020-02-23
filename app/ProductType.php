<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductType extends Model
{
    public static function indexProductType(){
     return DB::table('producttype')
         ->select('producttype.*')
         ->orderBy('ProductTypeID','asc')
         ->get();
    }

    public static function insertProductType($data){
        return DB::table('producttype')->insert($data);
    }

//    public static function showHomeSlider($id){
//        return DB::table('homeslider')
//            ->select('homeslider.*')
//            ->where('homeslider.HomeSliderID','=',$id)
//            ->first();
//    }

    public static function editProductType($id){
        return DB::table('producttype')
            ->select('producttype.*')
            ->where('producttype.ProductTypeID','=',$id)
            ->first();
    }

    public static function updateProductType($request,$id){
        $data = array(
            'Type' => $request->input('Type'),
            'ActiveStatus' => $request->input('ActiveStatus')?:0,
            'UpdateBy' => Auth::user()->id,
            'UpdateAt' => date("Y-m-d h:i:s")
        );

        $updateProducttype = DB::table('producttype')->where('ProductTypeID', '=' , $id)->update($data);

        return $updateProducttype;
    }

    public static function deleteProductType($id){
        return DB::table('producttype')->where('ProductTypeID', $id)->delete();
    }
}
