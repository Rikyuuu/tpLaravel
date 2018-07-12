<?php

namespace App\Http\Controllers;

use App\Message;

class MessagesController extends Controller
{
    public function nouveau()
    {
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
