<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/masuk', function () {
    return view('auth.masuk');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/macbook', function () {
    return view('MACBOOK.macbook');
});

Route::get('/cpu gaming', function () {
    return view('CPU GAMING.cpu gaming');
});

Route::get('/aksesoris komputer', function () {
    return view('AKSESORIS KOMPUTER.aksesoris komputer');
});

Route::get('/','ControllerVivo@fvivo');
Route::get('/vivo','ControllerVivo@index')->middleware('auth');  //@ adalah methode
Route::get('/carifvivo','ControllerVivo@carifvivo');
Route::delete('/vivo/{vivo}','ControllerVivo@destroy')->middleware('auth');
Route::get('/tambah_vivo','ControllerVivo@create')->middleware('auth');
Route::post('/prosestambahvivo','ControllerVivo@store')->middleware('auth');
Route::get('/edit_vivo/{vivo}','ControllerVivo@edit')->middleware('auth');
Route::patch('/editvivo/{vivo}','ControllerVivo@update')->middleware('auth');
Route::get('/lihat_vivo/{vivo}','ControllerVivo@show')->middleware('auth');

Route::get('/fapple','ControllerApple@fapple');
Route::get('/Apple','ControllerApple@index')->middleware('auth');  //@ adalah methode
Route::get('/carifapple','ControllerApple@carifapple');
Route::delete('/Apple/{apple}','ControllerApple@destroy')->middleware('auth');
Route::get('/tambah_apple','ControllerApple@create')->middleware('auth');
Route::post('/prosestambahapple','ControllerApple@store')->middleware('auth');
Route::get('/edit_apple/{apple}','ControllerApple@edit')->middleware('auth');
Route::patch('/editapple/{apple}','ControllerApple@update')->middleware('auth');
Route::get('/lihat_apple/{apple}','ControllerApple@show')->middleware('auth');

Route::get('/fsamsung','ControllerSamsung@fsamsung');
Route::get('/samsung','ControllerSamsung@index')->middleware('auth');  //@ adalah methode
Route::get('/carifsamsung','ControllerSamsung@carifsamsung');
Route::delete('/samsung/{samsung}','ControllerSamsung@destroy')->middleware('auth');
Route::get('/tambah_samsung','ControllerSamsung@create')->middleware('auth');
Route::post('/prosestambahsamsung','ControllerSamsung@store')->middleware('auth');
Route::get('/edit_samsung/{samsung}','ControllerSamsung@edit')->middleware('auth');
Route::patch('/editsamsung/{samsung}','ControllerSamsung@update')->middleware('auth');
Route::get('/lihat_samsung/{samsung}','ControllerSamsung@show')->middleware('auth');

Route::get('/fmacbook','ControllerMacbook@fmacbook');
Route::get('/macbook','ControllerMacbook@index')->middleware('auth');  //@ adalah methode
Route::get('/carifmacbook','ControllerMacbook@carifmacbook');
Route::delete('/macbook/{macbook}','ControllerMacbook@destroy')->middleware('auth');
Route::get('/tambah_macbook','ControllerMacbook@create')->middleware('auth');
Route::post('/prosestambahmacbook','ControllerMacbook@store')->middleware('auth');
Route::get('/edit_macbook/{macbook}','ControllerMacbook@edit')->middleware('auth');
Route::patch('/editmacbook/{macbook}','ControllerMacbook@update')->middleware('auth');
Route::get('/lihat_macbook/{macbook}','ControllerMacbook@show')->middleware('auth');

Route::get('/fcpu_gaming','ControllerCpugaming@fcpu_gaming');
Route::get('/cpu_gaming','ControllerCpugaming@index')->middleware('auth');  //@ adalah methode
Route::get('/carifcpu_gaming','ControllerCpugaming@carifcpu_gaming');
Route::delete('/cpu_gaming/{cpugaming}','ControllerCpugaming@destroy')->middleware('auth');
Route::get('/tambah_cpu_gaming','ControllerCpugaming@create')->middleware('auth');
Route::post('/prosestambahcpugaming','ControllerCpugaming@store')->middleware('auth');
Route::get('/edit_cpu_gaming/{cpugaming}','ControllerCpugaming@edit')->middleware('auth');
Route::patch('/editcpugaming/{cpugaming}','ControllerCpugaming@update')->middleware('auth');
Route::get('/lihat_cpugaming/{cpugaming}','ControllerCpugaming@show')->middleware('auth');

Route::get('/faksesoris_komputer','ControllerAksesoriskomputer@faksesoris_komputer');
Route::get('/aksesoris_komputer','ControllerAksesoriskomputer@index')->middleware('auth');  //@ adalah methode
Route::get('/carifaksesoris_komputer','ControllerAksesoriskomputer@carifaksesoris_komputer');
Route::delete('/aksesoris_komputer/{aksesoriskomputer}','ControllerAksesoriskomputer@destroy')->middleware('auth');
Route::get('/tambah_aksesoris_komputer','ControllerAksesoriskomputer@create')->middleware('auth');
Route::post('/prosestambahaksesoriskomputer','ControllerAksesoriskomputer@store')->middleware('auth');
Route::get('/edit_aksesoris_komputer/{aksesoriskomputer}','ControllerAksesoriskomputer@edit')->middleware('auth');
Route::patch('/editaksesoriskomputer/{aksesoriskomputer}','ControllerAksesoriskomputer@update')->middleware('auth');
Route::get('/lihat_aksesoriskomputer/{aksesoriskomputer}','ControllerAksesoriskomputer@show')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user','ControllerUser@index');
Route::delete('/user/{user}','ControllerUser@destroy');
Route::get('/tambah_user','ControllerUser@create');
Route::post('/prosestambahuser','ControllerUser@store');
Route::get('/edit_user/{user}','ControllerUser@edit');
Route::patch('/edituser/{user}','ControllerUser@update');
Route::get('/lihat_user/{user}','ControllerUser@show');
