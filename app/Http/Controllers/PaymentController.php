<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FedaPay\Fedapay;
// use FedaPay\FedaPayObject;

class PaymentController extends Controller
{
    public function boot()
    {
        // dd(env('FEDAPAY_PUBLIC_KEY'));
        Fedapay::setApiKey(env('FEDAPAY_PUBLIC_KEY'));
        /**
         * @var \FedaPay\FedaPayObject
         */
        $response = \FedaPay\Transaction::all();
        $transactions = $response->transactions;
        $meta = $response->meta;
        echo ' hi ';
    }
    public function getApiKeys()
    {
        $get = FedaPay::getApiKey();
        dd($get);
    }
}
