<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyControllers extends Controller
{
    function Construct(){

    }
    function index(){
    return view('home');
        // return view('welcome');
    }

    public function store(Request $request){
        $data['multiplier'] = $request->input('multiplier');
        return view('myroute', $data);
    }

}
