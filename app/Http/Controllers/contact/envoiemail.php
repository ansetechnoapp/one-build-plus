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
            // Définition des règles de validation
            $rules = [
                'name' => ['required', 'string', 'max:100', 'min:2'],
                'subject' => ['required', 'string', 'max:100', 'min:15'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'comments' => ['required', 'string', 'max:100', 'min:15'],
            ];

            // Définition des messages d'erreur personnalisés
            $messages = [
                'name' => 'Votre nom n\'est pas valide.',
                'subject' => 'Votre prénom n\'est pas valide.',
                'email' => 'Votre addresse email n\'est pas correcte.',
                'comments' => 'Voous devez au moins écrit une phrase.',
            ];

            // Définition des noms de champs personnalisés
            $customAttributes = [
                'name' => 'Votre nom n\'est pas valide.',
                'subject' => 'Votre prénom n\'est pas valide.',
                'email' => 'Votre addresse email n\'est pas correcte.',
                'comments' => 'Votre commentaire.',
            ];

            // Validation des données envoyées dans la requête

            try {
                $request->validate($rules, $messages, $customAttributes);
                Mail::to(env('MAIL_USERNAM'))
                    ->send(new emailcontact($request->all()));
                return view('contact.index', ['message' => 'Votre Message a été envoyé avec sucess']);
            } catch (ValidationException $e) {
                // Gestion de l'exception ValidationException ici (par exemple, affichage des messages d'erreur)
                // Récupération des messages d'erreur de validation
                $errors = $e->validator->errors();

                // Redirection vers la page de formulaire avec les messages d'erreur
                return redirect()->to('/contact')->withErrors($errors);
            }
        } else {

            echo "Entrer un Email correcte et verifier que tous les champs soit remplir ";
        }
    }
}
