<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function test(){
        return view('test');
    }

    function index1(){
        return view('Identification.inscrit');
    }

    function index2(){
        return view('Identification.login');
    }
}
