<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form extends Controller
{
    function getData(Request $r){
        $r->validate([
            'uname'=>'required || max:10',  
            'upass'=>'required || max:10',  
        ]);
        return $r->input();
    }
}
