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

Route::get('/allClient', [App\Http\Controllers\ClientController::class, 'index'])->name('client');
Route::post('/addClient', [App\Http\Controllers\ClientController::class, 'store'])->name('addClient');
Route::get('/editClient/{id}', [App\Http\Controllers\ClientController::class, 'edit'])->name('editClient');
Route::post('/updateClient/{id}', [App\Http\Controllers\ClientController::class, 'update'])->name('updateClient');
Route::get('/suppclient/{id}', [App\Http\Controllers\ClientController::class, 'destroy'])->name('suppclient');


//ADMIN
Route::get('/addAdmin', 'UserController@addAdmin')->name('addAdmin');
Route::get('/admin' , [App\Http\Controllers\UserController::class, 'Admin'])->name('admin');
//FACTURE
Route::get('/facture', [App\Http\Controllers\FactureController::class, 'index'])->name('facture');
Route::post('/addfact', [App\Http\Controllers\FactureController::class, 'store'])->name('addfact');
Route::get('/modi/{id}', 'FactureController@modi')->name('modi');
Route::get('/updateValide/{id}', 'FactureController@updateValide')->name('updateValide');
Route::get('/deleteFacture/{id}', 'FactureController@deleteFacture')->name('deleteFacture');
//FOURNISSEUR
Route::get('/allfourni', [App\Http\Controllers\FournisseurController::class, 'index'])->name('fournisseur');
Route::post('/addfourni', [App\Http\Controllers\FournisseurController::class, 'store'])->name('addfourni');
Route::get('/editFourni/{id}', [App\Http\Controllers\FournisseurController::class, 'edit'])->name('editFourni');
Route::post('/updateFourni/{id}', [App\Http\Controllers\FournisseurController::class, 'update'])->name('updateFourni');
//article
Route::get('/ajouterArticle/{id}', 'ArticleController@ajouterArticle')->name('ajouterArticle');
Route::get('/deleteArticle/{id}/{facture_id}', 'ArticleController@deleteArticle')->name('deleteArticle');