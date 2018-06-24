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

Route::get('/a-propos', function () {
    return view('a-propos');
});

Route::get('/hello', function() {
    return view('hello');
});

/*
Route::get('/bonjour/{prenom}', function() { // {prenom} permet de simplifier l'url en écrivant bonjour/Julien plutôt que bonjour?prenom=Julien

    // Les deux méthodes suivantes font la même chose
    // return 'Bonjour ' . $_GET['prenom']; // Méthode classique
    return 'Bonjour ' . request('prenom'); // Méthode laravel
});
*/

Route::get('bonjour/{nom}', function () {

    return view('bonjour', [
        'prenom' => request('nom'),
    ]);
});

Route::view('/', 'welcome');


Route::get('/inscription', 'InscriptionController@formulaire');
Route::post('/inscription', 'InscriptionController@traitement');

Route::get('/utilisateurs', 'UtilisateursController@liste');

Route::get('/connexion', 'ConnexionController@formulaire');
Route::post('/connexion', 'ConnexionController@traitement');

Route::get('/mon-compte', 'CompteController@accueil');
Route::get('/deconnexion', 'CompteController@deconnexion');
Route::get('/modification-mot-de-passe', 'CompteController@modificationMotDePasse');