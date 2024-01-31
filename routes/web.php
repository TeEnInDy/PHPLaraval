<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\C_titles;
use App\Http\Controllers\MyAuth;
use App\Http\Controllers\MyControllers;
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


Route::post('/my-route', function (Request $request) {
    $data['multiplier'] = $request->input('multiplier');
    return view('myroute', $data);
});


Route::resource('titles', C_titles::class);


Route::get('/login', [MyAuth::class, 'login_view'])->name('login');
Route::get('/register', [MyAuth::class, 'register_view']);
Route::get('/logout', [MyAuth::class, 'logout_process']);
Route::post('/login', [MyAuth::class, 'login_process']);
Route::post('/logout', [MyAuth::class, 'logout_process'])->name('logout');
Route::post('/register', [MyAuth::class, 'register_process']);

Route::resource('titles', C_titles::class)->middleware('auth');
Route::middleware('auth')->group(function(){
});
