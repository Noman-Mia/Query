<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class QueryController extends Controller
{
    function Demo1(){
    // $result = DB::table('lots')->get();
    $result = DB::table('lots')->first();
    // $result = DB::table('lots')->find(2);
    // $result = DB::table('lots')->pluck('category');
    // $result = DB::table('lots')->pluck('category','name');
    // $result = DB::table('lots')->pluck('category','name');
    

    //aggregate
    // $result = DB::table('lots')->count();
    // $result = DB::table('lots')->max('price');
    // $result = DB::table('lots')->min('price');
    // $result = DB::table('lots')->avg('price');


    //select clause

    // $result = DB::table('lots')->select('price','name','category')->get();
    // $result = DB::table('lots')->select('category')-> distinct() ->get();


    //join
   



    //union
    $query1=DB::table('lots')->where('price','>',25);
    $result=DB::table('lots')->where('id','>',100)
    ->union($query1)->get();



     return $result;
    }
}
 