<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyControllers extends Controller
{
    public $Myvarr = "HelloWorld!";
    function Construct(){

    }
    function index(){
        $data = ['var_a' => 'Hello World'];
    $data['var_b'] ="Laraval";
    return view('home');
        // return view('welcome');
    }

    public function store(Request $request){
        $data['multiplier'] = $request->input('multiplier');
        return view('myroute', $data);
    }

}
