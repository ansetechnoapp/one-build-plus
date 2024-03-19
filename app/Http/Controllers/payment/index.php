<?php

namespace App\Http\Controllers\payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class index extends Controller
{
    public function receptiondata(Request $request)
    {
        $price = $request->price;
        $id = $request->id;
        $payment_frequency = $request->payment_frequency;

        if (Session::get('payment_frequency') != null) {
            // dd('aa',$payment_frequency,Session::get('payment_frequency'));
            if ($payment_frequency != Session::get('payment_frequency')) {
                // dd('1');
                Session::put('payment_frequency', $payment_frequency);
                return view('payment.index',['path_manager' => $this->path_manager(0),]);
            } else {
                // dd('2'); 
                return view('payment.index',['path_manager' => $this->path_manager(0),]);
            }
        } else {
            if (isset($price) && isset($id)) {
                // dd('3');
                Session::put('prod_price', $price);
                Session::put('prod_id', $id);
                Session::put('payment_frequency', $payment_frequency);
                return view('payment.index',['path_manager' => $this->path_manager(0),]);
            } else {
                // dd('4',Session::get('user_lastName'),Session::get('payment_frequency'));
                // if (Session::get('user_lastName') && Session::get('user_firstName') && Session::get('user_email')&& Session::get('payment_frequency') != null) {
                //     # code...
                // } else {
                    
                // }
                return view('auth-signup.step2', ['EmailInputNotEmpty' => 'Entrer un Email correcte et verifier que tous les champs soit remplir.','path_manager' => $this->path_manager(0),]);
            }
        }
    }
    public function form_one()
    {
        return view('payment.index',['path_manager' => $this->path_manager(0),]);
    }
}
