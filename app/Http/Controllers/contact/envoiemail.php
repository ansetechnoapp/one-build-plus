<?php

namespace App\Http\Controllers\contact;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\contact\emailcontact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class envoiemail extends Controller
{
    public function envoiemail(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $comments = $request->comments;


        if (isset($name) || isset($email) || isset($subject) || isset($comments)) {
            $rules = [
                'name' => ['required', 'string', 'max:100', 'min:2'],
                'subject' => ['required', 'string', 'max:100', 'min:10'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'comments' => ['required'],
            ];
            $messages = [
                'name' => 'Votre nom n\'est pas valide.',
                'subject' => 'Votre question n\'est pas valide.',
                'email' => 'Votre addresse email n\'est pas correcte.',
                'comments' => 'Vous devez au moins écrit une phrase.',
            ];

            try {
                $request->validate($rules, $messages);
                Mail::to(env('MAIL_USERNAME'))
                    ->send(new emailcontact($request->all()));
                return view('contact.index', ['message' => 'Votre Message a été envoyé avec sucess']);
            } catch (ValidationException $e) {
                $errors = $e->validator->errors();
                return redirect()->to('/contact')->withErrors($errors);
            }
        } else {

            echo "Entrer un Email correcte et verifier que tous les champs soit remplir ";
        }
    }
}
