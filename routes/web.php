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
use App\Http\Controllers\C_titles;

Route::resource('titles', C_titles::class);

Route::get('/login', [MyAuth::class,'login_view']);
Route::get('/register', [MyAuth::class,'register_view']);
Route::get('/logout', [MyAuth::class,'logout_process']);
Route::post('/login', [MyAuth::class,'login_process']);
Route::post('/register', [MyAuth::class,'register_process']);

Route::middleware(['auth'])->group(function () {

});
