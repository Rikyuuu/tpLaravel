<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil()
    {
        if(auth()->guest()) {
            return redirect('/connexion')->withErrors([
                'email' => 'Vous devez être connecté pour accéder à cette page',
            ]);
        }
        return view('mon-compte');
    }
    
    public function deconnexion()
    {
        auth()->logout();
        
        return redirect('/');
    }
}
