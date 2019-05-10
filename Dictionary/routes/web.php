<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dictionary');
});
Route::post('/',function (Illuminate\Http\Request $request){
    $tudien = array("hello" => "xin chào", "hi" => "xin chào", "name" => "tên", "chicken" => "con gà", "family" => "gia đình", "love" => "yêu");
    $search = $request->word;
    foreach ($tudien as $key => $value) {
        if ($key == $search) {
            return view('show', compact(['search','value']));
        }
    }
    if ($key !== $search){
        return view('error');
    }
});