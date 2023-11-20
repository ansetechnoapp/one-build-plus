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

        Mail::to($email)->send(new sendregisteruser($request->all()));

        return View('view_response_mail.fr.devis.index', compact('company_name', 'email', 'tel'));
    }

    /* public function testmodelrequest(Request $request)
    {

        dd(Auth::user()->isactive);
        $isactive = User::where('email', 'lola@mail.com')
        ->where('isactive', '1')
        ->first();
        dd($isactive->isactive);
    } */
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
        // dd(Session::get('payment_frequency'));
        $price = $request->price;
        $id = $request->id;
        $payment_frequency = $request->payment_frequency;
        if (Session::get('payment_frequency') != null) {
            if ($payment_frequency != Session::get('payment_frequency')) {
                Session::put('payment_frequency', $payment_frequency);
                return view('payment.index');
            } else {
                return view('payment.index');
            }
        } else {
            if (isset($price) && isset($id)) {
                Session::put('prod_price', $price);
                Session::put('prod_id', $id);
                Session::put('payment_frequency', $payment_frequency);
                return view('payment.index');
            } else {
                return view('auth-signup.step2', ['EmailInputNotEmpty' => 'Entrer un Email correcte et verifier que tous les champs soit remplir.']);
            }
        }
    }
    public function receptiondata1(Request $request)
    {
        // dd($request->payment_frequency,$request->id,$request->price,$request->lastName,$request->firstName);
        // dd(Session::get('payment_frequency'));

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
        // dd(Session::get('payment_frequency'));
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



    public function SaveRegisterUserAndProd(Request $request)
    {

        // dd(Session::get('payment_frequency'));
        /* dd($request->payment_frequency,$request->id,$request->price,$request->lastName,$request->firstName,$request->registration_andf,
        $request->formality_fees,$request->notary_fees
        ,$request->montant,$request->email,$request->password,$request->password_confirm); */

        if ($request->password == $request->password_confirm) {
            $this->validateUserData($request);
            if (!$this->userExists($request->email)) {
                $user = $this->createUser($request);
                $additional_option = $this->createadditional_option($request, $user);
                $this->createDevis($request, $user, $additional_option);
                Mail::to($user->email)->send(new sendregisteruser($request->all()));

                return view('emails.emailsendforconfirmationuserregistration', ['email' => $user->email]);
            } else {
                return view('payment.suite2', ['email' => 'Votre email ou votre mots de passe ne correpond pas']);
            }
        } else {
            return view('payment.suite2', ['comparePassword' => 'S\'il vous plaît, les mots de passe ne sont par identique.']);
        }
    }

    private function validateUserData($request)
    {
        $rules = [
            'lastName' => ['required', 'string', 'max:100', 'min:2'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'max:255', Password::min(5)],
            'phone' => ['required', 'regex:/^\d{8}$/'],
        ];

        $messages = [
            'email.emailregister' => "L'adresse email n'est pas valide.",
            'password.minregister' => 'Le mot de passe doit contenir au moins 8 caractères.',
            'phone.required' => "Le phone est requis.",
            'phone.regex' => "Entrer un numéro de téléphone valide (08 chiffres).",
        ];

        $request->validate($rules, $messages);
    }

    private function userExists($email)
    {
        if ($email) {
            return User::where('email', $email)->exists();
        } else {
            $email = session::get('user_email');
            return User::where('email', $email)->exists();
        }
    }

    private function createUser($request)
    {
        $user = User::create([
            'lastName' => $request->lastName,
            'firstName' => $request->firstName,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);

        return $user;
    }

    private function createadditional_option($request, $user)
    {  /*  dd(Session::get('payment_frequency')); */
        $additional_option = new additional_option();
        $additional_option->registration_andf = $request->registration_andf;
        $additional_option->formality_fees = $request->formality_fees;
        $additional_option->notary_fees = $request->notary_fees;
        $additional_option->payment_frequency = Session::get('payment_frequency');
        $additional_option->prod_id = $request->id;
        $additional_option->user()->associate($user);
        $additional_option->save();

        return $additional_option;
    }

    private function createDevis($request, $user, $additional_option)
    {
        $devis = new devis();
        $devis->price = $request->price;
        $devis->montant = $request->montant;
        $devis->prod_id = $request->id;
        $devis->dateDevis = now()->format('Y-m-d');
        $devis->dateExpiration = now()->addDays(7)->format('Y-m-d');
        $devis->user()->associate($user);
        $devis->additional_option()->associate($additional_option);
        $devis->save();
        return $devis;
    }
}
