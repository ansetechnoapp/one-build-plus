<?php

namespace App\Http\Controllers\auth_signup;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class index extends Controller
{
    public function show(){
        return view('auth-signup.index',['path_manager' => $this->path_manager(0),]);
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
}
