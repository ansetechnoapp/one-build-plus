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
    public function getaccountprofil()
    {
        $emailRecherche = Auth::user()->email;
        $donnees = User::where('email', $emailRecherche)->first();
        if ($donnees) {
            return view('dashboard.profil.index', ['donnees' => $donnees]);
        }else {
            return redirect()->back()->with('error', 'User data not found.');
        }
    }
    public function saveImage(Request $request, User $user)
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
            $user->where('id', Auth::user()->id)->update(['img' => $imgPath]);
        }
        return redirect()->route('dashboard.profil')->with('success', 'Mise à jour réussie');
    } catch (ValidationException $e) {
        return redirect()->back()->withErrors($e->validator->errors())->withInput();
    } catch (\Exception $e) {
        Log::error($e->getMessage());
        return redirect()->back()->with('error', 'Une erreur est survenue.');
    }
}

}
