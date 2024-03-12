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
    public function getaccountprofil($txt1)
    {
        $donnees = $this->Users->findUser('email', Auth::user()->email,$this->cache_time());
        if ($donnees) {
            return view($txt1, ['donnees' => $donnees, 'sub_path_admin' => $this->sub_path_admin()]);
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
