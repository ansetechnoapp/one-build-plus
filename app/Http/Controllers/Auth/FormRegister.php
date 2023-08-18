<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\devis;
use Illuminate\Http\Request;
use App\Mail\sendregisteruser;
use App\Models\additional_option;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class FormRegister extends Controller
{
    public function mail1(Request $request)
    {

        $company_name = 'Bois de JOAO ERIC A.E';
        $email = 'info@txbest.online';
        $tel = '+33 7 80 97 99 74';
        Mail::to($email)
            ->send(new sendregisteruser($request->all()));
        return View('view_response_mail.fr.devis.index', $request, compact('company_name', 'email', 'tel'));
    }
    /* public function testmodelrequest(Request $request)
    {

        dd(Auth::user()->isactive);
        $isactive = User::where('email', 'lola@mail.com')
        ->where('isactive', '1')
        ->first();
        dd($isactive->isactive);
    } */
    public function SaveRegisterUserAndProd(Request $request)
    {



        /* $civility = $request->input('civility');
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName'); */
        $price = $request->price;
        $lastName = $request->lastName;
        $firstName = $request->firstName;
        $prod_id = $request->id;
        $registration_andf = $request->registration_andf;
        $formality_fees = $request->formality_fees;
        $notary_fees = $request->notary_fees;
        $email = $request->email;
        $password1 = $request->password;
        $password2 = $request->password_confirm;
        $password = bcrypt($request->password);


        if (isset($price) || isset($lastName) || isset($firstName) || isset($prod_id) || isset($email) || isset($password)) {
            if ($price == '' || $lastName == '' || $firstName == '' || $prod_id == '' || $email == '' || $password == '') {
                echo "S'il vous plaît, remplissez tous les champs";
            } else {
                if ($password1 == $password2) {
                    // Définition des règles de validation
                    $rules = [
                        /* 'firstName' => ['required', 'string', 'max:100', 'min:2'],
                    'lastName' => ['required', 'string', 'max:100', 'min:2'], */
                        'lastName' => ['required', 'string', 'max:100', 'min:2'],
                        'email' => ['required', 'string', 'email', 'max:255'],
                        'password' => ['required', 'string', 'max:255', Password::min(5)],
                        /* 'password' => ['required', 'string', 'max:255', Password::min(8)
                        ->mixedCase()
                        ->numbers()
                        ->symbols()
                        ->uncompromised()], */
                    ];

                    // Définition des messages d'erreur personnalisés
                    $messages = [
                        'email.emailregister' => "L'adresse email n'est pas valide.",
                        'password.minregister' => 'Le mot de passe doit contenir au moins 8 caractères.',
                    ];

                    // Définition des noms de champs personnalisés
                    $customAttributes = [
                        'emailregister' => 'Adresse email',
                        'minregister' => 'mot de passe',
                    ];

                    // Validation des données envoyées dans la requête

                    try {
                        $request->validate($rules, $messages, $customAttributes);
                        if (User::where('email', $request->email)->first() === null) {
                            // dd('eee');

                            $insert = User::create([
                                /* 'civility' => $civility, */
                                'lastName' => $lastName,
                                'firstName' => $firstName,
                                'email' => $email,
                                'password' => $password,

                            ]);

                            $additional_option = new additional_option();
                            $additional_option->registration_andf = $registration_andf;
                            $additional_option->formality_fees = $formality_fees;
                            $additional_option->notary_fees = $notary_fees;
                            $additional_option->prod_id = $prod_id;
                            $additional_option->user()->associate($insert); // Associe le modèle users à la relation
                            $additional_option->save(); // Sauvegarde d'abord le modèle
                            $additional_option_insert = $additional_option; // Utilisez simplement l'instance existante
                            $devis = new devis();
                            $devis->montant = $price;
                            $devis->prod_id = $prod_id;
                            $devis->dateDevis = now()->format('Y-m-d');
                            $devis->dateExpiration = now()->addDays(7)->format('Y-m-d');
                            $devis->user()->associate($insert); // Associe le modèle users à la relation
                            $devis->additional_option()->associate($additional_option_insert); // Associe le modèle additional_option à la relation
                            $devis->save();
                            //  dd('validate');
                            Mail::to($email)
                                ->send(new sendregisteruser($request->all()));
                            return view('emails.emailsendforconfirmationuserregistration', ['email' => $email]);
                        } else {
                            return redirect()->route('payment', ['id' => $prod_id, 'price' => $price]);
                        }
                    } catch (ValidationException $e) {
                        // Gestion de l'exception ValidationException ici (par exemple, affichage des messages d'erreur)
                        // Récupération des messages d'erreur de validation
                        $errors = $e->validator->errors();

                        // Redirection vers la page de formulaire avec les messages d'erreur
                        return redirect()->to('/auth-signup')->withErrors($errors);
                    }
                } else {
                    echo "S'il vous plaît, les mots de passe ne sont par identique";
                }
            }
        } else {

            echo "Entrer un Email correcte et verifier que tous les champs soit remplir ";
        }
    }
    public function SaveRegister(Request $request)
    {



        /* $civility = $request->input('civility'); */
        $lastName = $request->lastName;
        $firstName = $request->firstName;
        $email = $request->email;
        $password1 = $request->password;
        $password2 = $request->password_confirm;
        $password = bcrypt($request->password);


        if (isset($lastName) || isset($email) || isset($password)) {
            if ($lastName == '' || $email == '' || $password == '') {
                echo "S'il vous plaît, remplissez tous les champs";
            } else {
                if ($password1 == $password2) {
                    // Définition des règles de validation
                    $rules = [
                        /* 'firstName' => ['required', 'string', 'max:100', 'min:2'],
                    'lastName' => ['required', 'string', 'max:100', 'min:2'], */
                        'lastName' => ['required', 'string', 'max:100', 'min:2'],
                        'email' => ['required', 'string', 'email', 'max:255'],
                        'password' => ['required', 'string', 'max:255', Password::min(5)],
                        /* 'password' => ['required', 'string', 'max:255', Password::min(8)
                        ->mixedCase()
                        ->numbers()
                        ->symbols()
                        ->uncompromised()], */
                    ];

                    // Définition des messages d'erreur personnalisés
                    $messages = [
                        'email.emailregister' => "L'adresse email n'est pas valide.",
                        'password.minregister' => 'Le mot de passe doit contenir au moins 8 caractères.',
                    ];

                    // Définition des noms de champs personnalisés
                    $customAttributes = [
                        'emailregister' => 'Adresse email',
                        'minregister' => 'mot de passe',
                    ];

                    // Validation des données envoyées dans la requête

                    try {
                        $request->validate($rules, $messages, $customAttributes);
                        if (User::where('email', $request->email)->first() === null) {
                            // dd('eee');

                            $insert = User::create([
                                /* 'civility' => $civility, */
                                'lastName' => $lastName,
                                'firstName' => $firstName,
                                'email' => $email,
                                'password' => $password,

                            ]);
                            //  dd('validate');
                            Mail::to($email)
                                ->send(new sendregisteruser($request->all()));
                            return view('emails.emailsendforconfirmationuserregistration', ['email' => $email]);
                        } else {
                            return redirect()->route('save.user');
                        }
                    } catch (ValidationException $e) {
                        // Gestion de l'exception ValidationException ici (par exemple, affichage des messages d'erreur)
                        // Récupération des messages d'erreur de validation
                        $errors = $e->validator->errors();

                        // Redirection vers la page de formulaire avec les messages d'erreur
                        return redirect()->to('/auth-signup')->withErrors($errors);
                    }
                } else {
                    echo "S'il vous plaît, les mots de passe ne sont par identique";
                }
            }
        } else {

            echo "Entrer un Email correcte et verifier que tous les champs soit remplir ";
        }
    }

    public function receptiondata(Request $request)
    {
        $price = $request->price;
        $lastName = $request->lastName;
        $firstName = $request->firstName;
        $id = $request->id;
        return view('payment.index', compact('price', 'lastName', 'firstName', 'id'));
    }
    public function receptiondata1(Request $request)
    {
        $price = $request->price;
        $lastName = $request->lastName;
        $firstName = $request->firstName;
        $id = $request->id;
        return view('payment.suite', compact('price', 'lastName', 'firstName', 'id'));
    }
    public function receptiondata2(Request $request)
    {
        $price = $request->price;
        $lastName = $request->lastName;
        $firstName = $request->firstName;
        $id = $request->id;
        $registration_andf = $request->registration_andf;
        $formality_fees = $request->formality_fees;
        $notary_fees = $request->notary_fees;

        return view('payment.suite2', compact('price', 'lastName', 'firstName', 'id', 'registration_andf', 'formality_fees', 'notary_fees'));
    }
}
