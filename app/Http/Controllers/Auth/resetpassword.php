<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\sendpasswordreset;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Validation\ValidationException;

class resetpassword extends Controller
{
    public function updatePasswordSendEmail(Request $request)
    {

        $email = $request->email;

        // dd($email);

        if (isset($email)) {
            // Définition des règles de validation
            $rules = [
                'email' => ['required', 'string', 'email', 'max:255'],
            ];

            // Définition des messages d'erreur personnalisés
            $messages = [
                'emailregister' => "L'adresse email n'est pas valide.",
            ];

            // Définition des noms de champs personnalisés
            $customAttributes = [
                'emailregister' => 'Adresse email',
            ];

            // Validation des données envoyées dans la requête

            try {
                
                $request->validate($rules, $messages, $customAttributes);
                
                if (User::where('email', $request->email)->first() === null) {
                    dd('vvv');
                    return redirect()->route('auth-re-password');
                } else {
                    Mail::to($email)
                        ->send(new sendpasswordreset($request->all()));
                        return view('home.index');
                    
                }
            } catch (ValidationException $e) {
                // Gestion de l'exception ValidationException ici (par exemple, affichage des messages d'erreur)
                // Récupération des messages d'erreur de validation
                $errors = $e->validator->errors();

                // Redirection vers la page de formulaire avec les messages d'erreur
                return redirect()->to('/sendEmail')->withErrors($errors);
            }
        } else {

            echo "Entrer un Email correcte et verifier que tous les champs soit remplir ";
        }
    }
    public function updatePassword(Request $request)
    {


        $newPassword = $request->password;
        $oldPasswordcurrent = $request->password_confirmation;
        $email = $request->email;

        //////////////////////////////
        if (isset($newPassword) || isset($oldPasswordcurrent)) {
            if ($newPassword == '' && $oldPasswordcurrent == '') {
                dd('rrr');
                echo " S'il vous plaît, remplissez tous les champs.";
            } else {

                // Définition des règles de validation
                $rules = [
                    'password' => ['required', 'string', 'max:255', 'min:5', 'confirmed'],
                    /* 'password' => ['required', 'string', 'max:255', Password::min(8)
                            ->mixedCase()
                            ->numbers()
                            ->symbols()
                            ->uncompromised()], */
                ];

                // Définition des messages d'erreur personnalisés
                $messages = [
                    'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
                ];

                // Définition des noms de champs personnalisés
                $customAttributes = [
                    'min' => 'mot de passe',
                ];
                // Validation des données envoyées dans la requête
                try {
                    $credentials = $request->validate($rules, $messages, $customAttributes);
                    if ($credentials) {
                        User::where('email', $request->email)->first()->update([
                            'password' => hash::make($newPassword),
                        ]);
                        return redirect()->route('auth-re-password');
                    } else {
                        // L'authentification a échoué, redirigez l'utilisateur vers la page de connexion avec un message d'erreur
                        return back()->withErrors([
                            'email' => 'Les identifiants fournis ne correspondent pas à nos enregistrements.',
                        ])->withInput($request->only('email'));
                    }
                } catch (ValidationException $e) {
                    // Gestion de l'exception ValidationException ici (par exemple, affichage des messages d'erreur)
                    // Récupération des messages d'erreur de validation
                    $errors = $e->validator->errors();

                    // Redirection vers la page de formulaire avec les messages d'erreur
                    return redirect()
                        ->back()
                        ->withErrors($errors);
                }
            }
        } else {
            echo "Entrer un Email correcte et verifier que tous les champs soit remplir ";
        }
    }
}
