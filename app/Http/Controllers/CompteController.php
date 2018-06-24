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
        auth()->logout();

        flash('Vous êtes maintenant déconnecté.')->success();
        
        return redirect('/');
    }

    public function modificationMotDePasse()
    {
        if(auth()->guest()) {
            flash('Vous devez être connecté pour accéder à cette page')->error();

            return redirect('/connexion');
        }

        request()->validate([
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirm' => ['required'],
        ]);

        auth()->user()->update([
            'mot_de_passe' => bcrypt(request('password')),
        ]);

        flash('Votre mot de passe a bien été mis à jour.');

        return('/mon-compte');
    }    
}
