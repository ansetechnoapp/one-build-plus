<?php

namespace App\Models\Fedapay;

use App\Models\Fedapay;

trait Delete
{

    public function delete_devis($devis_id)
    {
        return Fedapay::where('devis_id', $devis_id)->delete();
    }
}