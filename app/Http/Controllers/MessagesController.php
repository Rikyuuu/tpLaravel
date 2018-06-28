<?php

namespace App\Http\Controllers;

use App\Message;

class MessagesController extends Controller
{
    public function nouveau()
    {
        // Vérification que la personne est bien connectée
        if (auth()->guest()) {
            flash("Vous devez être connecté pour voir cette page.")->error();

            return redirect('/connexion');
        }

        request()->validate([
            'message' => ['required'],
        ]);

        Message::Create([
            'utilisateur_id' => auth()->user()->id,
            'contenu' => request('message'),
        ]);


        flash("Votre message a bien été publié.")->success();
        return back();
    }
}
