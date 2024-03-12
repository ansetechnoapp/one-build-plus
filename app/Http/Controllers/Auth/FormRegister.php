<?php

namespace App\Http\Controllers\Auth;

use App\Models\devis;
use App\Models\User;
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

    private function validateUserData($request)
    {
        $rules = [
            'lastName' => ['required', 'string', 'max:100', 'min:2'],
            'firstName' => ['required', 'string', 'max:100', 'min:2'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'max:255', Password::min(5)],
            'phone' => ['required', 'regex:/^\d{8}$/'],
        ];

        $messages = [
            'lastName' => 'Votre nom n\'est pas valide.',
            'firstName' => 'Votre prénom n\'est pas valide.',
            'email.emailregister' => "L'adresse email n'est pas valide.",
            'password.minregister' => 'Le mot de passe doit contenir au moins 8 caractères.',
            'phone.required' => "Le phone est requis.",
            'phone.regex' => "Entrer un numéro de téléphone valide (08 chiffres).",
        ];

        $request->validate($rules, $messages);
    }

    public function SaveRegister(Request $request)
    {
        cache()->forget('first_user_' . $request->email);
        $email = Session::get('user_email');
        $password1 = $request->password;
        $password2 = $request->password_confirm;
        $password = bcrypt($request->password);

        if (isset($email) || isset($password)) {
            if ($password1 == $password2) {
                try {
                    $this->validateUserData($request);
                    if (!$this->Users->VerifyUserExist($request->email,$this->cache_time())) {
                        $this->Users->createUser($request);
                        Mail::to($email)
                            ->send(new sendregisteruser($request->all()));
                        Session::flush();
                        return redirect()->route('url.confirmation.user.registration', ['email' => $email]);
                    } else {
                        return view('emails.emailsendforconfirmationuserregistration', ['email' => $email]);
                    }
                } catch (ValidationException $e) {
                    $errors = $e->validator->errors();
                    return view('auth-signup.step2', ['errors' => $errors]);
                }
            } else {
                return view('auth-signup.step2', ['comparePassword' => 'S\'il vous plaît, les mots de passe ne sont par identique.']);
            }
        } else {
            return view('auth-signup.step2', ['EmailInputNotEmpty' => 'Entrer un Email correcte et verifier que tous les champs soit remplir.']);
        }
    }

    public function receptiondata(Request $request)
    {
        $price = $request->price;
        $id = $request->id;
        $payment_frequency = $request->payment_frequency;

        if (Session::get('payment_frequency') != null) {
            // dd('aa',$payment_frequency,Session::get('payment_frequency'));
            if ($payment_frequency != Session::get('payment_frequency')) {
                // dd('1');
                Session::put('payment_frequency', $payment_frequency);
                return view('payment.index');
            } else {
                // dd('2'); 
                return view('payment.index');
            }
        } else {
            if (isset($price) && isset($id)) {
                // dd('3');
                Session::put('prod_price', $price);
                Session::put('prod_id', $id);
                Session::put('payment_frequency', $payment_frequency);
                return view('payment.index');
            } else {
                // dd('4',Session::get('user_lastName'),Session::get('payment_frequency'));
                // if (Session::get('user_lastName') && Session::get('user_firstName') && Session::get('user_email')&& Session::get('payment_frequency') != null) {
                //     # code...
                // } else {
                    
                // }
                return view('auth-signup.step2', ['EmailInputNotEmpty' => 'Entrer un Email correcte et verifier que tous les champs soit remplir.']);
            }
        }
    }
    public function form_one()
    {
        return view('payment.index');
    }
    public function receptiondata1(Request $request)
    {
        $lastnom = $request->lastName;
        $firstnom = $request->firstName;
        // $payment_frequency = $request->payment_frequency;
        $price = Session::get('prod_price');
        $id = Session::get('prod_id');
        if (isset($price) && isset($lastnom) && isset($firstnom) && isset($id)) {
            $rules = [
                'price' => ['required'],
                'lastName' => ['required', 'string', 'max:100', 'min:2'],
                'firstName' => ['required', 'string', 'max:100', 'min:2'],
            ];

            $messages = [
                'price' => "Vous devez entrer le montant",
                'lastName' => "Entrer votre nom",
                'firstName' => "Entrer votre prénom",
            ];


            try {
                $request->validate($rules, $messages);
                Session::put('user_lastName', $lastnom);
                Session::put('user_firstName', $firstnom);
                // Session::put('payment_frequency', $payment_frequency);
                return view('payment.suite');
            } catch (ValidationException $e) {
                $errors = $e->validator->errors();
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
            $rules = [
                'price' => ['required'],
                'lastName' => ['required', 'string', 'max:100', 'min:2'],
                'firstName' => ['required', 'string', 'max:100', 'min:2'],
            ];
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
                $errors = $e->validator->errors();
                return view('payment.suite', ['id' => $id, 'price' => $price, 'lastName' => $lastName, 'firstName' => $firstName, 'registration_andf' => $registration_andf, 'formality_fees' => $formality_fees, 'notary_fees' => $notary_fees, 'errors' => $errors]);
            }
        } else {
            return view('payment.suite2', compact('price', 'lastName', 'firstName', 'id', 'registration_andf', 'formality_fees', 'notary_fees', 'payment_frequency', 'montant'));
        }
    }
    public function SaveSignupOneStep(Request $request)
    {
        cache()->forget('first_user_' . $request->email);
        $lastName = $request->lastName;
        $firstName = $request->firstName;
        $email = $request->email;
        $payment_frequency = $request->payment_frequency;

        if (isset($lastName) || isset($firstName) || isset($email)) {
            $rules = [
                'lastName' => ['required', 'string', 'max:100', 'min:2'],
                'firstName' => ['required', 'string', 'max:100', 'min:2'],
                'email' => ['required', 'string', 'email', 'max:255'],
            ];
            $messages = [
                'lastName' => 'Votre nom n\'est pas valide.',
                'firstName' => 'Votre prénom n\'est pas valide.',
                'email' => "L'adresse email n'est pas valide.",
            ];

            try {
                $request->validate($rules, $messages);
                if (!$this->Users->VerifyUserExist($request->email,$this->cache_time())) {
                    Session::put('user_lastName', $lastName);
                    Session::put('user_firstName', $firstName);
                    Session::put('user_email', $email);
                    Session::put('payment_frequency', $payment_frequency);

                    return view('auth-signup.step2');
                } else {
                    return view('emails.emailsendforconfirmationuserregistration', ['email' => $email]);
                }
            } catch (ValidationException $e) {
                $errors = $e->validator->errors();
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

        cache()->forget('first_user_' . $request->email);
        if ($request->password == $request->password_confirm) {
            $this->validateUserData($request);
            if (!$this->Users->VerifyUserExist($request->email,$this->cache_time())) {
                $user = $this->Users->createUser($request);
                $additional_option = $this->Add_opt->createadditional_option($request, $user);
                $this->devi->createDevis($request, $user, $additional_option);
                Mail::to($user->email)->send(new sendregisteruser($request->all()));

                return view('emails.emailsendforconfirmationuserregistration', ['email' => $user->email]);
            } else {
                return view('payment.suite2', ['email' => 'Votre email ou votre mots de passe ne correpond pas']);
            }
        } else {
            return view('payment.suite2', ['comparePassword' => 'S\'il vous plaît, les mots de passe ne sont par identique.']);
        }
    }
}
