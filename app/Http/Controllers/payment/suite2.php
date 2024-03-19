<?php

namespace App\Http\Controllers\payment;

use Illuminate\Http\Request;
use App\Mail\sendregisteruser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class suite2 extends Controller
{
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
                return view('payment.suite', ['id' => $id, 'price' => $price, 'lastName' => $lastName, 'firstName' => $firstName, 'registration_andf' => $registration_andf, 'formality_fees' => $formality_fees, 'notary_fees' => $notary_fees, 'errors' => $errors,'path_manager' => $this->path_manager(0),]);
            }
        } else {
            return view('payment.suite2', compact('price', 'lastName', 'firstName', 'id', 'registration_andf', 'formality_fees', 'notary_fees', 'payment_frequency', 'montant'),['path_manager' => $this->path_manager(0),]);
        }
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

                return view('emails.emailsendforconfirmationuserregistration', ['email' => $user->email,'path_manager' => $this->path_manager(0),]);
            } else {
                return view('payment.suite2', ['email' => 'Votre email ou votre mots de passe ne correpond pas','path_manager' => $this->path_manager(0),]);
            }
        } else {
            return view('payment.suite2', ['comparePassword' => 'S\'il vous plaît, les mots de passe ne sont par identique.','path_manager' => $this->path_manager(0),]);
        }
    }
}
