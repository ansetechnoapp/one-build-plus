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
        $user = $this->Users->findUser('id',$user_id,$this->cache_time());
        if ($user_id !== null && $prod_id !== null) {
            $additionalOption = $this->Add_opt->findAdditional_option($prod_id, $user_id);
            $getDevis = $this->devi->findDevis($prod_id, $user_id);
            if ($user['user'] && $additionalOption && $getDevis) {
                $data = [
                    'numDevis' => $getDevis->id,
                    'nom' => $user['user']->lastName,
                    'prenom' => $user['user']->firstName,
                    'email' => $user['user']->email,
                    'service' => $additionalOption->registration_andf,
                    'service1' => $additionalOption->formality_fees,
                    'service2' => $additionalOption->notary_fees,
                    'price' => $getDevis->price,
                    'montantTotal' => $getDevis->montant,
                    'dateDevis' => $getDevis->dateDevis,
                    'dateExpiration' => $getDevis->dateExpiration,
                ];

                return Pdf::loadView('devis.index', $data)->setPaper('A4', 'Portrait')->stream();
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
        $getDevis = $this->devi->findDevis_withAll_TableForUsers_id(Auth::user()->id);
        return view('dashboard.home.index', ['listDevis' => $getDevis,'sub_path_admin' =>'']);
    }
}