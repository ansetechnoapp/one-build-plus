<?php

namespace App\Http\Controllers\dashboard\profil;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class index extends Controller
{
    public function saveprofilandupdate(Request $request,$pathRoute1)
    {

        $address = $request->address;
        $email = $request->email;
        $user_id = Auth::user()->id;
        if (isset($email) || isset($address)) {
            // Définition des règles de validation
            $rules = [
                'address' => ['required', 'string', 'max:100', 'min:2'],
                /*
                
                'postalCode' => ['required', 'string', 'max:100', 'min:2'],
                'city' => ['required', 'string', 'max:100', 'min:2'],
                'birthday_day' => ['required', 'string', 'max:100', 'min:1'],
                'birthday_month' => ['required', 'string', 'max:100', 'min:2'],
                'birthday_year' => ['required', 'string', 'max:100', 'min:2'],*/

                'email' => ['required', 'string', 'email', 'max:255'],
            ];

            $messages = [
                'email' => "L'adresse email n'est pas valide.",
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

            if ($this->Users->VerifyUserExist($request->email,$this->cache_time())) {
                $this->Users->UpdateUser($request, $user_id);
                return redirect()->route($pathRoute1,['sub_path_admin'=>$this->path_manager(2)]);
            } else {
                return redirect()->route($pathRoute1,['sub_path_admin'=>$this->path_manager(2)]);
            }
        } else {

            echo "Entrer un Email correcte et verifier que tous les champs soit remplir ";
        }
    }

    public function Usersaveprofilandupdate(Request $request)
    {
        return $this->saveprofilandupdate($request,'dashboard.profil');
    }
    public function getaccountprofil($txt1)
    {
        $donnees = $this->Users->findUser('email', Auth::user()->email,$this->cache_time());
        if ($donnees['user']) {
            return view($txt1, ['donnees' => $donnees['user'], 'sub_path_admin' => $this->path_manager(2)]);
        } else {
            return redirect()->back()->with('error', 'User data not found.');
        }
    }
    public function getaccountprofil2()
    {
        return $this->getaccountprofil('dashboard.profil.index');
    }

    public function saveImage($request,$txt1,$user)
    {
        $rules = [
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5000',
        ];

        $messages = [
            'img' => 'erreur de chargement de l\'image 1, la taille de l\'image ne doit pas dépasser 5Mo',
        ];
        try {
            $request->validate($rules, $messages);
            $imgFieldOnModel =  Auth::user()->img;
            if ($request->hasFile('img') && !$request->file('img')->getError()) {
                if ($imgFieldOnModel) {
                    Storage::disk('public')->delete($imgFieldOnModel);
                }
                $imgPath = $request->file('img')->store('userImg', 'public');
                $this->Users->Update_col_User('id', Auth::user()->id, $imgPath, 'img');
            }
            return redirect()->route($txt1)->with('success', 'Mise à jour réussie');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator->errors())->withInput();
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Une erreur est survenue.');
        }
    }
    public function saveImage2(Request $request, User $user)
    {
        return $this->saveImage($request,'dashboard.profil',$user);
    }

}
