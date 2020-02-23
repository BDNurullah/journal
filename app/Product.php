<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    public static function indexProduct(){
     return DB::table('product')
         ->select('product.*')
         ->orderBy('ProductID','asc')
         ->get();
    }
}
