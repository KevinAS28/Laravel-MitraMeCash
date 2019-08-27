<?php

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

Route::get('/', 'HomeController@index')->name('home');

Route::get("/login", function() {return view("login");});
Route::get("/register", function() {return view("register");});
Route::get("/master_home", function() {return view("master_home");});
//Route::get("/home", function() {return view("home");});
Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registration_code', function(){return view('auth/registration_code');})->middleware('auth');
Route::post('/registration_code_submit', 'RegistrationCode@verify')->name("registration_code_submit");

Route::get("/release", "ReleaseSaldo@retView");
Route::post("/release/{rel}", "ReleaseSaldo@release")->name("relsal");

Route::get("/daftar_mutasi", "DaftarMutasi@retView");
Route::get("/info_saldo", "InfoSaldo@retView");
Route::get("/logout", "HomeController@Logout");