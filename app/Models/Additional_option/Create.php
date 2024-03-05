<?php

namespace App\Models\Additional_option;

use App\Models\Additional_option;
use Illuminate\Support\Facades\Session;

trait Create
{
    
    public function createadditional_option($request, $user)
    {   /* dd(Session::get('payment_frequency')); */
        $additional_option = new Additional_option();
        $additional_option->registration_andf = $request->registration_andf;
        $additional_option->formality_fees = $request->formality_fees;
        $additional_option->notary_fees = $request->notary_fees;
        $additional_option->payment_frequency = Session::get('payment_frequency');
        $additional_option->prod_id = $request->id;
        $additional_option->user()->associate($user);
        $additional_option->save();

        return $additional_option;
    }

    public function createAdditional_option2($request)
    {
        return Additional_option::create([
            'registration_andf' => $request->registration_andf,
            'formality_fees' => $request->formality_fees,
            'notary_fees' => $request->notary_fees,
            'payment_frequency' => $request->payment_frequency,
            'prod_id' => $request->prod_id,
            'users_id' => $request->user_id,
        ]);
    }
}
