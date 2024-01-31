<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cont;
use App\Http\Controllers\Form;
use App\Http\Controllers\userController;
use App\Http\Controllers\addMember;
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
    return view('welcome');
});
// Route::view("/home","Home");
Route::get('/home/{name}',function($name){
    return view('Home',["name"=>$name]);
});

Route::get("/index",[Cont::class,'index']);
// Route::post("login",[Form::class,'getData']);
Route::view("noaccess","noaccess");
Route::view("noaccess1","noaccess1");
Route::group(['middleware'=>['protectedPage']],function(){
    Route::view("/p1",'pract1');
    Route::view("form",'Form');
});
Route::get("users",[userController::class,'index']);
Route::get("user",[userController::class,'getData']);

// Route::view("login","login");
Route::view("profile","profile");
Route::post("userLogin",[userController::class,'userLogin']);
Route::get('/login',function(){
    if(session()->has('uname')){
        return redirect('profile');
    }
    return view('login');
});
Route::get('/logout',function(){
    if(session()->has('uname')){
        session()->pull('uname');
    }
    return redirect('login');
});

Route::view("add",'add');
Route::post("addMem",[addMember::class,'add']);