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
    public function saveprofilandupdate(Request $request)
    {

        $firstName = $request->firstName;
        $lastName = $request->lastName;
        $address = $request->address;
        $email = $request->email;
        $phone = $request->phone;
        $birthday = $request->birthday;
        $user_id = Auth::user()->id;
        if (isset($email) || isset($address)) {
            // Définition des règles de validation
            $rules = [
                'firstName' => ['required', 'string', 'max:100', 'min:2'],
                'lastName' => ['required', 'string', 'max:100', 'min:2'],
                'address' => ['required', 'string', 'max:100', 'min:2'],
                'phone' => ['required', 'string', 'max:100', 'min:6'],
                /*
                
                'postalCode' => ['required', 'string', 'max:100', 'min:2'],
                'city' => ['required', 'string', 'max:100', 'min:2'],
                'birthday_day' => ['required', 'string', 'max:100', 'min:1'],
                'birthday_month' => ['required', 'string', 'max:100', 'min:2'],
                'birthday_year' => ['required', 'string', 'max:100', 'min:2'],*/

                'email' => ['required', 'string', 'email', 'max:255'],
            ];

            $messages = [
                'firstName' => "Entrer votre prénom",
                'lastName' => "Entrer votre nom.",
                'email' => "L'adresse email n'est pas valide.",
                'phone' => "S'il vous plaît, entrez votre numéro de téléphone",
            ];


            // Validation des données envoyées dans la requête

            try {
                $request->validate($rules, $messages);
            } catch (ValidationException $e) {
                // Gestion de l'exception ValidationException ici (par exemple, affichage des messages d'erreur)
                // Récupération des messages d'erreur de validation
                $errors = $e->validator->errors();

                // Redirection vers la page de formulaire avec les messages d'erreur
                return redirect()
                    ->back()
                    ->withErrors($errors);
            }

            if ($this->Users->VerifyUserExist($request->email)) {
                $this->Users->UpdateUser($request, $user_id);
                return redirect()->route('dashboard.profil');
            } else {
                return redirect()->route('dashboard.profil');
            }
        } else {

            echo "Entrer un Email correcte et verifier que tous les champs soit remplir ";
        }
    }
    public function ChangePassword(Request $request)
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
                    $this->Users->UpdatePasswordUser(Auth::user()->id,hash::make($newPasswordp));
                    $oldpasswordCorrect = [
                        'parametre1' => 'Votre mots de passe a été mise a jour',
                    ];
                    return view('dashboard.account_security.index', $oldpasswordCorrect);
                } else {
                    $oldpasswordCorrect = [
                        'parametre1' => 'Votre mots de passe actuel n\'est pas correct',
                    ];
                    return view('dashboard.account_security.index', $oldpasswordCorrect);
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
                'parametre1' => 'Verifier que tous les champs soit remplir',
            ];
            return view('dashboard.account_security.index', $champVide);
        }
    }
    public function userDisable($user_id)
    {
        $isactive = '2';
        $this->Users-> Update_col_User('id',$user_id,$isactive,'isactive');
        return redirect()->route('admin.list_user',[
        'sub_path_admin'=>$this->sub_path_admin,]);
    }
    public function userActivate($user_id)
    {
        $isactive = '1';
        $this->Users-> Update_col_User('id',$user_id,$isactive,'isactive');
        return redirect()->route('admin.list_user',[
        'sub_path_admin'=>$this->sub_path_admin,]);
    }
}
