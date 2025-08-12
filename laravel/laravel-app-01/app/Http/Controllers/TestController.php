<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        if(App){
            return "App Name: ..."
        }
    }
    //
}
