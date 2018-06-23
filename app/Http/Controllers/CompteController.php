<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil()
    {
        if(auth()->guest()) {
            flash('Vous devez être connecté pour accéder à cette page')->error();

            return redirect('/connexion');
        }
        return view('mon-compte');
    }
    
    public function deconnexion()
    {
        if(auth()->check()) {
            auth()->logout();

            flash('Vous êtes maintenant déconnecté.')->success();
        }
        
        return redirect('/');
    }
}
