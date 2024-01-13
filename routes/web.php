<?php
use App\Http\Controllers\MyControllers;
use Illuminate\Support\Facades\Route;
Route::get('/my-controllers', [MyControllers::class, 'index']);
Route::get('/my-controllers2','App\Http\Controllers\MyControllers@index');
Route::resource('/my-controllers4',MyControllers::class);
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