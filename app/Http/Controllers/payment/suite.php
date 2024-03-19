<?php

namespace App\Http\Controllers\payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class suite extends Controller
{
    public function receptiondata1(Request $request)
    {
        $lastnom = $request->lastName;
        $firstnom = $request->firstName;
        // $payment_frequency = $request->payment_frequency;
        $price = Session::get('prod_price');
        $id = Session::get('prod_id');
        if (isset($price) && isset($lastnom) && isset($firstnom) && isset($id)) {
            $rules = [
                'price' => ['required'],
                'lastName' => ['required', 'string', 'max:100', 'min:2'],
                'firstName' => ['required', 'string', 'max:100', 'min:2'],
            ];

            $messages = [
                'price' => "Vous devez entrer le montant",
                'lastName' => "Entrer votre nom",
                'firstName' => "Entrer votre prénom",
            ];


            try {
                $request->validate($rules, $messages);
                Session::put('user_lastName', $lastnom);
                Session::put('user_firstName', $firstnom);
                // Session::put('payment_frequency', $payment_frequency);
                return view('payment.suite',['path_manager' => $this->path_manager(0),]);
            } catch (ValidationException $e) {
                $errors = $e->validator->errors();
                return view('payment.index', ['errors' => $errors,'path_manager' => $this->path_manager(0),]);
            }
        } else {
            // dd('rr');
            return view('payment.suite',['path_manager' => $this->path_manager(0),]);
        }
    }
}
