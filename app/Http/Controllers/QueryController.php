<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class QueryController extends Controller
{
    function Demo1(){
    //  $result = DB::table('users')->get();
     $result = DB::table('lots')->first();
     return $result;
    }
}
 