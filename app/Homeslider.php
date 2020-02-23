<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Homeslider extends Model
{
    public static function indexHomeslide(){
     return DB::table('homeslider')
         ->select('homeslider.*')
         ->orderBy('HomeSliderID','asc')
         ->get();
    }

    public static function insertHomeSlide($data){
        return DB::table('homeslider')->insert($data);
    }

    public static function showHomeSlider($id){
        return DB::table('homeslider')
            ->select('homeslider.*')
            ->where('homeslider.HomeSliderID','=',$id)
            ->first();
    }

    public static function editHomeslider($id){
        return DB::table('homeslider')
            ->select('homeslider.*')
            ->where('homeslider.HomeSliderID','=',$id)
            ->first();
    }

    public static function updateHomeSlider($request,$id,$homeSlideImage){
        $data = array(
            'Title' => $request->input('Title'),
            'Description' => $request->input('Description'),
            'ActiveStatus' => $request->input('ActiveStatus')?:0,
            'ImageUrl' => $homeSlideImage,
            'UpdateBy' => Auth::user()->id,
            'UpdateAt' => date("Y-m-d h:i:s")
        );

        $updateHomeSlideer = DB::table('homeslider')->where('HomeSliderID', '=' , $id)->update($data);

        return $updateHomeSlideer;
    }

    public static function deleteHomeSlide($id){
        return DB::table('homeslider')->where('HomeSliderID', $id)->delete();
    }
}
