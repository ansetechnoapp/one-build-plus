<?php

namespace App\Models\Fedapay;

use App\Models\Fedapay;

trait Update
{

    public function UpdateStatutFedapay($request,$status)
    {
        return Fedapay::where('fedapayTransactionId', $request->id)->update(['statut' => $status]);
    }
}