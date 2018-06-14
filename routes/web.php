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

    // echo 'Hello World !';
    return view('welcome');
});

Route::get('/a-propos', function () {
    return view('a-propos');
});

Route::get('/hello', function() {
    return view('hello');
});

Route::get('/bonjour/{prenom}', function() { // {prenom} permet de simplifier l'url en écrivant bonjour/Julien plutôt que bonjour?prenom=Julien

    // Les deux méthodes suivantes font la même chose
    // return 'Bonjour ' . $_GET['prenom']; // Méthode classique
    return 'Bonjour ' . request('prenom'); // Méthode laravel
});