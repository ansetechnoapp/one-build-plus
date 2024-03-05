<?php

namespace App\Models\Devis;

use App\Models\Devis;

trait Create
{
    

    public function createDevis($request,$prod_id,$insert)
    {
        $devis = new devis();
        $devis->price = $request->price;
        $devis->montant = $request->montant;
        $devis->prod_id = $prod_id;
        $devis->users_id = $request->user_id;
        $devis->dateDevis = now()->format('Y-m-d');
        $devis->dateExpiration = now()->addDays(7)->format('Y-m-d');
        $devis->additional_option()->associate($insert); // Associe le modèle additional_option à la relation
        $devis->save();
        return $devis;
    }
}
