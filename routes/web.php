<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DBController;


Route::get('/connection',[DBController::class,'index']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dbconn', function(){
    return view('dbconn');
}
);