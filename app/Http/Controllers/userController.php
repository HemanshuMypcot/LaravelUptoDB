<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  
use App\Models\user;

class userController extends Controller
{
    function index(){
        return user::all();
    }
    function getData(){
        $data=user::all();
        return view("user",compact('data'));
    }
    function userLogin(Request $r){
        $data= $r->input();
        $r=session()->put('uname',$data['uname']);
        return redirect('profile');
    }
}
