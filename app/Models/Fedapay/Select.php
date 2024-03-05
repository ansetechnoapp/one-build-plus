<?php

namespace App\Models\Fedapay;

use App\Models\Fedapay;

trait Select
{

    private function IdfedapayExists($id,$users_id)
    {
        return Fedapay::where('devis_id', $id)->where('users_id', $users_id)->exists();
    }
}