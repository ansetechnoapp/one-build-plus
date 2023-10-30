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
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class FormRegister extends Controller
{
    public function mail1(Request $request)
    {

        $company_name = 'Bois de ERIC A.E';
        $email = 'info@txbest.online';
        $tel = '+229 7 80 97 99 74';
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
        $price = $request->price;
        $lastName = $request->lastName;
        $firstName = $request->firstName;
        $prod_id = $request->id;
        $registration_andf = $request->registration_andf;
        $formality_fees = $request->formality_fees;
        $notary_fees = $request->notary_fees;
        $payment_frequency = $request->payment_frequency;
        $montant = $request->montant;
        $email = $request->email;
        $password1 = $request->password;
        $password2 = $request->password_confirm;
        $password = bcrypt($request->password);


        if (isset($price) || isset($lastName) || isset($firstName) || isset($prod_id) || isset($email) || isset($password)) {
            if ($password1 == $password2) {
                $rules = [
                    'lastName' => ['required', 'string', 'max:100', 'min:2'],
                    'email' => ['required', 'string', 'email', 'max:255'],
                    'password' => ['required', 'string', 'max:255', Password::min(5)],
                    /* 'password' => ['required', 'string', 'max:255', Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()], */
                ];
                $messages = [
                    'email.emailregister' => "L'adresse email n'est pas valide.",
                    'password.minregister' => 'Le mot de passe doit contenir au moins 8 caractères.',
                ];

                try {
                    $request->validate($rules, $messages);
                    if (User::where('email', $request->email)->first() === null) {

                        $insert = User::create([
                            'lastName' => $lastName,
                            'firstName' => $firstName,
                            'email' => $email,
                            'password' => $password,

                        ]);

                        $additional_option = new additional_option();
                        $additional_option->registration_andf = $registration_andf;
                        $additional_option->formality_fees = $formality_fees;
                        $additional_option->notary_fees = $notary_fees;
                        $additional_option->payment_frequency = $payment_frequency;
                        $additional_option->prod_id = $prod_id;
                        $additional_option->user()->associate($insert);
                        $additional_option->save();
                        $additional_option_insert = $additional_option;
                        $devis = new devis();
                        $devis->price = $price;
                        $devis->montant = $montant;
                        $devis->prod_id = $prod_id;
                        $devis->dateDevis = now()->format('Y-m-d');
                        $devis->dateExpiration = now()->addDays(7)->format('Y-m-d');
                        $devis->user()->associate($insert);
                        $devis->additional_option()->associate($additional_option_insert);
                        $devis->save();
                        Mail::to($email)
                            ->send(new sendregisteruser($request->all()));
                        return view('emails.emailsendforconfirmationuserregistration', ['email' => $email]);
                    } else {
                        return redirect()->route('payment', ['id' => $prod_id, 'price' => $price]);
                    }
                } catch (ValidationException $e) {
                    $errors = $e->validator->errors();
                    return redirect()->to('/auth-signup')->withErrors($errors);
                }
            } else {
                return view('payment.suite2', ['comparePassword' => 'S\'il vous plaît, les mots de passe ne sont par identique.']);
            }
        } else {

            return view('auth-signup.step2', ['EmailInputNotEmpty' => 'Entrer un Email correcte et verifier que tous les champs soit remplir.']);
        }
    }
    public function SaveRegister(Request $request)
    {
        $lastName = Session::get('user_lastName');;
        $firstName = Session::get('user_firstName');
        $email = Session::get('user_email');
        $phone = $request->phone;
        $password1 = $request->password;
        $password2 = $request->password_confirm;
        $password = bcrypt($request->password);
        // dd($lastName,$firstName,$email,$password);

        if (isset($lastName) || isset($email) || isset($password)) {
            if ($password1 == $password2) {
                $rules = [
                    'lastName' => ['required', 'string', 'max:100', 'min:2'],
                    'firstName' => ['required', 'string', 'max:100', 'min:2'],
                    'phone' => ['required', 'regex:/^\d{8}$/'],
                    'email' => ['required', 'string', 'email', 'max:255'],
                    'password' => ['required', 'string', 'max:255', Password::min(5)],
                    /* 'password' => ['required', 'string', 'max:255', Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()], */
                ];


                $messages = [
                    'lastName' => 'Votre nom n\'est pas valide.',
                    'firstName' => 'Votre prénom n\'est pas valide.',
                    'phone.required' => "Le phone est requis.",
                    'phone.regex' => "Entrer un numéro de téléphone valide (08 chiffres).",
                    'email' => 'Votre addresse email n\'est pas correcte.',
                    'password' => "le mots de passe doit contenir plus de 5 caractére.",
                ];
                try {
                    $request->validate($rules, $messages);
                    if (User::where('email', $request->email)->first() === null) {
                        $insert = User::create([
                            'lastName' => $lastName,
                            'firstName' => $firstName,
                            'phone' => $phone,
                            'email' => $email,
                            'password' => $password,

                        ]);
                        Mail::to($email)
                            ->send(new sendregisteruser($request->all()));
                        Session::flush();
                        return view('emails.emailsendforconfirmationuserregistration', ['email' => $email]);
                    } else {
                        return view('emails.emailsendforconfirmationuserregistration', ['email' => $email]);
                    }
                } catch (ValidationException $e) {
                    // dd('ggz');
                    $errors = $e->validator->errors();
                    return view('auth-signup.step2', ['errors' => $errors]);
                }
            } else {
                return view('auth-signup.step2', ['comparePassword' => 'S\'il vous plaît, les mots de passe ne sont par identique.']);
            }
        } else {
            // dd("edcv");
            return view('auth-signup.step2', ['EmailInputNotEmpty' => 'Entrer un Email correcte et verifier que tous les champs soit remplir.']);
        }
    }

    public function receptiondata(Request $request)
    {
        $price = $request->price;
        $payment_frequency = $request->payment_frequency;
        $id = $request->id;
        if (isset($price) && isset($id)) {
            Session::put('prod_price', $price);
            Session::put('prod_id', $id);
            Session::put('payment_frequency', $payment_frequency);
            return view('payment.index');
        } else {
            return view('auth-signup.step2', ['EmailInputNotEmpty' => 'Entrer un Email correcte et verifier que tous les champs soit remplir.']);
        }
    }
    public function receptiondata1(Request $request)
    {
        $lastnom = $request->lastName;
        $firstnom = $request->firstName;
        $price = Session::get('prod_price');
        $id = Session::get('prod_id');
        if (isset($price) && isset($lastnom) && isset($firstnom) && isset($id)) {
            // Définition des règles de validation
            $rules = [
                'price' => ['required'],
                'lastName' => ['required', 'string', 'max:100', 'min:2'],
                'firstName' => ['required', 'string', 'max:100', 'min:2'],
            ];

            // Définition des messages d'erreur personnalisés
            $messages = [
                'price' => "Vous devez entrer le montant",
                'lastName' => "Entrer votre nom",
                'firstName' => "Entrer votre prénom",
            ];

            // Validation des données envoyées dans la requête

            try {
                // dd('zassssc');
                $request->validate($rules, $messages);
                Session::put('user_lastName', $lastnom);
                Session::put('user_firstName', $firstnom);
                return view('payment.suite');
            } catch (ValidationException $e) {
                // Gestion de l'exception ValidationException ici (par exemple, affichage des messages d'erreur)
                // Récupération des messages d'erreur de validation
                // dd('zsc');
                $errors = $e->validator->errors();

                // Redirection vers la page de formulaire avec les messages d'erreur
                return view('payment.index', ['errors' => $errors]);
            }
        } else {
            // dd('rr');
            return view('payment.suite');
        }
    }
    public function receptiondata2(Request $request)
    {
        $price = Session::get('prod_price');;
        $lastName = Session::get('user_lastName');;
        $firstName = Session::get('user_firstName');
        $id = Session::get('prod_id');
        $payment_frequency = Session::get('payment_frequency');
        $montant = $request->montant;
        $registration_andf = $request->registration_andf;
        $formality_fees = $request->formality_fees;
        $notary_fees = $request->notary_fees;
        if (isset($price) && isset($lastName) && isset($firstName) && isset($id)) {
            // Définition des règles de validation
            $rules = [
                'price' => ['required'],
                'lastName' => ['required', 'string', 'max:100', 'min:2'],
                'firstName' => ['required', 'string', 'max:100', 'min:2'],
            ];

            // Définition des messages d'erreur personnalisés
            $messages = [
                'price' => "Vous devez entrer le montant",
                'lastName' => "Entrer votre nom",
                'firstName' => "Entrer votre prénom",
            ];
            try {
                $request->validate($rules, $messages);
                Session::put('montant', $montant);
                Session::put('registration_andf', $registration_andf);
                Session::put('formality_fees', $formality_fees);
                Session::put('notary_fees', $notary_fees);
                return view('payment.suite2');
            } catch (ValidationException $e) {
                // Gestion de l'exception ValidationException ici (par exemple, affichage des messages d'erreur)
                // Récupération des messages d'erreur de validation
                $errors = $e->validator->errors();

                // Redirection vers la page de formulaire avec les messages d'erreur
                return view('payment.suite', ['id' => $id, 'price' => $price, 'lastName' => $lastName, 'firstName' => $firstName, 'registration_andf' => $registration_andf, 'formality_fees' => $formality_fees, 'notary_fees' => $notary_fees, 'errors' => $errors]);
            }
        } else {
            // dd('rr');
            return view('payment.suite2', compact('price', 'lastName', 'firstName', 'id', 'registration_andf', 'formality_fees', 'notary_fees', 'payment_frequency', 'montant'));
        }
    }
    public function SaveSignupOneStep(Request $request)
    {
        $lastName = $request->lastName;
        $firstName = $request->firstName;
        $email = $request->email;
        $payment_frequency = $request->payment_frequency;

        if (isset($lastName) || isset($firstName) || isset($email)) {
            // Définition des règles de validation
            $rules = [
                'lastName' => ['required', 'string', 'max:100', 'min:2'],
                'firstName' => ['required', 'string', 'max:100', 'min:2'],
                'email' => ['required', 'string', 'email', 'max:255'],
            ];

            // Définition des messages d'erreur personnalisés
            $messages = [
                'lastName' => 'Votre nom n\'est pas valide.',
                'firstName' => 'Votre prénom n\'est pas valide.',
                'email' => "L'adresse email n'est pas valide.",
            ];

            try {
                $request->validate($rules, $messages);
                if (User::where('email', $request->email)->first() === null) {
                    Session::put('user_lastName', $lastName);
                    Session::put('user_firstName', $firstName);
                    Session::put('user_email', $email);
                    Session::put('payment_frequency', $payment_frequency);

                    return view('auth-signup.step2');
                } else {
                    return view('emails.emailsendforconfirmationuserregistration', ['email' => $email]);
                }
            } catch (ValidationException $e) {
                // Gestion de l'exception ValidationException ici (par exemple, affichage des messages d'erreur)
                // Récupération des messages d'erreur de validation
                $errors = $e->validator->errors();
                // dd('dd');
                // Redirection vers la page de formulaire avec les messages d'erreur
                return redirect()->to('/sign-up')->withErrors($errors);
            }
        } else {
            return view('auth-signup.step2', ['EmailInputNotEmpty' => 'Entrer un Email correcte et verifier que tous les champs soit remplir.']);
        }
    }
    public function subscribe(Request $request)
    {
        $subscribe = $request->subscribe;
    }
}
