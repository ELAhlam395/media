<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\providercontroller;
use App\Http\Controllers\servercontroller;
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

Route::get('', function () {
    return view('appsupport/layout');
});
//---------------controller provider---
Route::get("home",[providercontroller::class,'cancel']);
//-----------------home----------
Route::get("addprov",[providercontroller::class,'index']);
Route::post("addprv",[providercontroller::class,'addprovider']);
Route::get("addprov",[providercontroller::class,'show']);
Route::get("delete/{id}",[providercontroller::class,'delete']);
Route::get("edit/{id}",[providercontroller::class,'edit']);
Route::post("updated/{id}",[providercontroller::class,'update']);


//----------------------controller server--------------
Route::get("srvs",[servercontroller::class,'index']);
Route::post("addsrv",[servercontroller::class,'addserver']);
Route::get("listeserverss",[servercontroller::class,'liste']);
Route::get("listeserverss",[servercontroller::class,'showsrves']);


Route::get("delete/{id}",[servercontroller::class,'deletesrv']);


