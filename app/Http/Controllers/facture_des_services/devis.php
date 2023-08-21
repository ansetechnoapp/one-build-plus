<?php

namespace App\Http\Controllers\facture_des_services;

use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\additional_option;
use App\Models\devis as getdevis;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\ValidationException;

class devis extends Controller
{


    public function genererDevis(Request $request)
    {
        $devis_id = $request->devis_id;
        $prod_id = $request->prod_id;
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        if ($user_id !== null && $prod_id !== null) {
            $additionalOption = Additional_option::where('prod_id', $prod_id)
            ->where('users_id', $user_id)
            ->first();

        $getDevis = getDevis::where('prod_id', $prod_id)
            ->where('users_id', $user_id)
            ->first();

        if ($user && $additionalOption && $getDevis) {
            $data = [
                'nom' => $user->lastName,
                'prenom' => $user->firstName,
                'email' => $user->email,
                'services' => [
                    $additionalOption->registration_andf,
                    $additionalOption->formality_fees,
                    $additionalOption->notary_fees,
                ],
                'montantTotal' => '500',
                'dateDevis' => $getDevis->dateDevis,
                'dateExpiration' => $getDevis->dateExpiration,
            ];

            $pdf = Pdf::loadView('devis.index', $data);
            return $pdf->stream('devis.pdf');
        } else {
            // Gérez le cas où les modèles n'ont pas été trouvés
            // Par exemple, redirigez avec un message d'erreur
        }
        } else {
            return redirect()->route('home');
        }
        

        
    }

    public function listDevisForUser()
    {
        $user_id = Auth::user()->id;
        $getDevis = getDevis::where('users_id', $user_id)->get();
        return view('dashboard.home.index', ['listDevis' => $getDevis]);
    }
}
