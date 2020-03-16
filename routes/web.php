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

Route::get('/', function () {
return view('welcome');
});
Route::get('/hello', function () {
echo '<h1>Bonjour !</h1>';
});
Route::get('/bonjour/{nom}', function ($nom) {
echo "Bonjour " . $nom;
});
Route::get('nouvellepage', 'MonControleur@retourneNouvellePage');
Route::get('exemple', 'MonControleur@retournePageExemple');
Route::get('membres', 'ControleurMembres@index');
Route::get('membrescss', 'ControleurMembrescss@index');
Route::get('membre/{numero}', 'ControleurMembres@afficher');
Route::get('creer', 'ControleurMembres@creer');
Route::post('creation/membre', 'ControleurMembres@enregistrer');
Route::get('modifier/{id}', 'ControleurMembres@editer');
Route::patch('miseAJour/{id}', 'ControleurMembres@miseAJour');