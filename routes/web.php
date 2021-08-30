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

//HOME + DAHSBOARD
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dash', function () {
    return view('admin.homeAdmin');
});
//CLIENT
/*Route::get('/ajoutclient',function(){
    return view('client.AjouteClient');
});*/
Route::get('/allClient', [App\Http\Controllers\ClientController::class, 'index'])->name('client');
Route::post('/addClient', [App\Http\Controllers\ClientController::class, 'store'])->name('addClient');
Route::get('/editClient/{id}', [App\Http\Controllers\ClientController::class, 'edit'])->name('editClient');
Route::post('/updateClient/{id}', [App\Http\Controllers\ClientController::class, 'update'])->name('updateClient');
Route::get('/face',function(){
    return view('client.editClient');
});

//ADMIN
Route::get('/addadmin' , [App\Http\Controllers\UserController::class, 'Admin'])->name('addadmin');
//FACTURE
Route::get('/facture',function(){
    return view('facture.homeFacture');
});
//FOURNISSEUR
Route::get('/allfourni', [App\Http\Controllers\FournisseurController::class, 'index'])->name('fournisseur');
Route::post('/addfourni', [App\Http\Controllers\FournisseurController::class, 'store'])->name('addfourni');
