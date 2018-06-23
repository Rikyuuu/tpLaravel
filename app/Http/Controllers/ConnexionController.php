<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function formulaire()
    {
        return view('connexion');
    }
    
    public function traitement()
    {
        request()->validate([
            'email' =>  ['required', 'email'],
            'password' => ['required'],
        ]);

        $resultat = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        var_dump($resultat);

        if($resultat) {
            return redirect('/mon-compte');
        }

        return back()->withInput()->withErrors([
            'email' => 'Vos identifiants sont incorrects.',
        ]);
    }
}
