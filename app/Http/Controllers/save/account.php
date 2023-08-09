<?php

namespace App\Http\Controllers\save;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class account extends Controller
{
    public function saveprofilandupdate(Request $request){
        dd($request->all());
    }
    public function ChangePassword(Request $request){
        dd($request->all());

        $newPasswordp = $request->newPassword;
        $oldPasswordcurrent = $request->oldPassword;

        if (isset($newPasswordp) || isset($oldPasswordcurrent)) {
            if ($newPasswordp == '' && $oldPasswordcurrent == '') {
                echo " S'il vous plaît, remplissez tous les champs.";
                dd('rrr');
            } else {

                // Définition des règles de validation
                $rules = [
                    'newPassword' => ['required', 'string', 'max:255', Password::min(5)],
                    /* 'password' => ['required', 'string', 'max:255', Password::min(8)
                        ->mixedCase()
                        ->numbers()
                        ->symbols()
                        ->uncompromised()], */
                ];

                // Définition des messages d'erreur personnalisés
                $messages = [
                    'newpassword.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
                ];

                // Définition des noms de champs personnalisés
                $customAttributes = [
                    'min' => 'mot de passe',
                ];
                // Validation des données envoyées dans la requête
                try {
                    $request->validate($rules, $messages, $customAttributes);
                } catch (ValidationException $e) {
                    // Gestion de l'exception ValidationException ici (par exemple, affichage des messages d'erreur)
                    // Récupération des messages d'erreur de validation
                    $errors = $e->validator->errors();

                    // Redirection vers la page de formulaire avec les messages d'erreur
                    return redirect()
                        ->back()
                        ->withErrors($errors);
                }

                $currentPasswordStatus = Hash::check($oldPasswordcurrent, auth()->user()->password);
                if ($currentPasswordStatus) {

                    User::findOrFail(Auth::user()->id)->update([
                        'password' => hash::make($newPasswordp),
                    ]);

                    return redirect()->route('editpassword');
                } else {
                    return redirect()->route('editpassword');
                }
            }
        } else {
            echo "Entrer un Email correcte et verifier que tous les champs soit remplir ";
        }
    }   
    public function getaccountprofil(){
        dd(Auth::user()->email);
        $emailRecherche = 'lola@mail.com';
        // $emailRecherche = Auth::user()->email;
        $donnees = User::where('email', $emailRecherche)->get();
        // dd($donnees->all());
        if ($donnees) {
            // Faire quelque chose si l'utilisateur est trouvé
            return view('dashboard.profil.index', ['donnees' => $donnees]);
        } 
    }
}


