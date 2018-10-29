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
    return view('auth.register');
});

Route::resource('client','ClientController');

Route::resource('projet','ProjetController');

Route::resource('tache','TacheController');

Route::resource('employe','EmployeController');

Route::resource('categorie','CategorieController');

Route::resource('devis','DevisController');

Route::resource('facture','FactureController');

Route::get('/projet/{id}/affiche', 'ProjetController@show');

Route::get('/projet/{id}/fichier','FichierController@index');

Route::get('/tache/create/{id}', 'TacheController@create');


Route::post('/tache/{id}', 'TacheController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout');
