<?php

namespace App\Models\Additional_option;

use App\Models\Additional_option;

trait Select
{

    public function findAdditional_option($prod_id,$user_id)
    {
        return Additional_option::where('prod_id', $prod_id)->where('users_id', $user_id)->first();
    }
}