<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/test', function () {
    return view('test');
});



route::get('/sample/{name?}', function ($name=null){
    $data= compact('name');
    return view('sample')->with($data);
    // return view('sample')
    //         ->with('name', 'Victoria')
    //         ->with('occupation', 'BE');
            
}


);