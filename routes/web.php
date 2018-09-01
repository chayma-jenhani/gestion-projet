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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/admin',function () {
    return view('admin.admin');});

Route::resource('client','ClientController');

Route::resource('projet','ProjetController');

Route::get('/afficheProjet/{id}', 'ProjetController@show');

Route::resource('tache','TacheController');

Route::resource('employe','EmployeController');

Route::resource('categorie','CategorieController');

Route::resource('devis','DevisController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
