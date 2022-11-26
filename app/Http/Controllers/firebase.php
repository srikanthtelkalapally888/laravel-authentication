<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firebase extends Controller
{
    //
    function index(){
        return view('signup');
    }
    function signin(){
        return view('login');
    }
}
