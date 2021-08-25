<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dash', function () {
    return view('admin.homeAdmin');
});
//CLIENT
Route::get('/client',function(){
    return view('client.homeClient');
});
Route::get('/ajoutclient',function(){
    return view('client.AjouteClient');
});


//ADMIN
Route::get('/addadmin',function(){
    return view('admin.add');
});
//FACTURE
Route::get('/facture',function(){
    return view('facture.homeFacture');
});