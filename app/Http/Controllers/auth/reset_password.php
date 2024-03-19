<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class reset_password extends Controller
{
    public function ChangePassword(Request $request,$pathView1,$num_path_manager)
    { 


        $oldPassword = $request->oldPassword;
        $newPasswordp = $request->newPassword;
        $password = $request->comfirm_password;
        if (isset($oldPassword) || isset($newPasswordp) || isset($password)) {
            // Définition des règles de validation
            $rules = [
                'oldPassword' => ['required', 'string', 'max:255', Password::min(5)],
                'newPassword' => ['required', 'string', 'max:255', Password::min(5)],
                'comfirm_password' => ['required', 'string', 'max:255', Password::min(5)],
                /* 'password' => ['required', 'string', 'max:255', Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()], */
            ];

            // Définition des messages d'erreur personnalisés
            $messages = [
                'oldPassword' => 'Le mot de passe doit contenir au moins 8 caractères.',
                'newPassword' => 'Le mot de passe doit contenir au moins 8 caractères.',
                'comfirm_password' => 'Le mot de passe doit contenir au moins 8 caractères.',
            ];
            try {
                $request->validate($rules, $messages);


                $currentPasswordStatus = Hash::check($oldPassword, auth()->user()->password);
                if ($currentPasswordStatus) {
                    $this->Users->UpdatePasswordUser(Auth::user()->id, hash::make($newPasswordp));
                    $oldpasswordCorrect = [
                        'parametre1' => 'Votre mots de passe a été mise a jour','sub_path_admin' => $this->path_manager($num_path_manager)
                    ];
                    return view($pathView1, $oldpasswordCorrect);
                } else {
                    $oldpasswordCorrect = [
                        'parametre1' => 'Votre mots de passe actuel n\'est pas correct','sub_path_admin' => $this->path_manager($num_path_manager)
                    ];
                    return view($pathView1, $oldpasswordCorrect);
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
        } else {
            $champVide = [
                'parametre1' => 'Verifier que tous les champs soit remplir','sub_path_admin' => $this->path_manager(1)
            ];
            return view($pathView1, $champVide);
        }
    }
}
