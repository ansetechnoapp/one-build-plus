<?php

namespace App\Models\Fedapay;

use App\Models\Fedapay;

trait Create
{
    
    public function fedapayValidatePay($users_id,$fedapaytransactionId,$url,$devis_id)
    {
        if (!$this->IdfedapayExists($devis_id,$users_id)) {
            $pay = new Fedapay();
            $pay->fedapayTransactionId = $fedapaytransactionId;
            $pay->fedapayTransactionUrl = $url;
            $pay->devis()->associate($devis_id);
            $pay->user()->associate($users_id);
            $pay->save();

            return $pay;
        } else {

            $pay = $this->delete_devis($devis_id);
            $pay = new Fedapay();
            $pay->fedapayTransactionId = $fedapaytransactionId;
            $pay->fedapayTransactionUrl = $url;
            $pay->devis()->associate($devis_id);
            $pay->user()->associate($users_id);
            $pay->save();

            return $pay;
        }
    }
}
