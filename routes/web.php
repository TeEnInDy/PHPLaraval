<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-route', function () {
    $data = ['var_a' => 'Hello World'];
    $data['var_b'] ="Laraval";
    return view('myfolder.mypage',$data);
});
use Illuminate\Http\Request;

Route::post('/my-route', function (Request $request) {
    $data['multiplier'] = $request->input('multiplier');
    return view('myroute', $data);
});