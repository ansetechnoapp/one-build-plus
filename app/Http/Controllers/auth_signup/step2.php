<?php

namespace App\Http\Controllers\auth_signup;

use Illuminate\Http\Request;
use App\Mail\sendregisteruser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class step2 extends Controller
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
                    return view('auth-signup.step2', ['errors' => $errors,'path_manager' => $this->path_manager(0),]);
                }
            } else {
                return view('auth-signup.step2', ['comparePassword' => 'S\'il vous plaît, les mots de passe ne sont par identique.','path_manager' => $this->path_manager(0),]);
            }
        } else {
            return view('auth-signup.step2', ['EmailInputNotEmpty' => 'Entrer un Email correcte et verifier que tous les champs soit remplir.','path_manager' => $this->path_manager(0),]);
        }
    }
}
