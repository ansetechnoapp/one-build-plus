<?php

namespace App\Models\Devis;

use App\Models\Devis;

trait Select
{

    public function findDevis($prod_id,$user_id)
    {
        return Devis::where('prod_id', $prod_id)->where('users_id', $user_id)->first();
    }
    public function findDevis_withAll_TableForUsers_id($user_id)
    {
        return Devis::with('prod', 'additional_option', 'user', 'fedapay')->where('users_id', $user_id)->get();
    }
    public function findDevis_withAll_Table()
    {
        return Devis::with('prod', 'additional_option', 'user', 'fedapay')->get();
    }
}