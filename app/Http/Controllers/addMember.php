<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addMember extends Controller
{
    function add(Request $r){
        $data= $r->input('uname');
        $r->session()->flash('uname',$data);
        return redirect('add');
    }
}
