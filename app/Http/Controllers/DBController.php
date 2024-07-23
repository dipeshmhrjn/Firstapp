<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DBController extends Controller
{
    public function index(Request $request){
        if(DB::connection()->getDatabaseName()){
            $database = DB::connection()->getDatabaseName();
            dd("Successfully connected",$database);
        }
    }
}
