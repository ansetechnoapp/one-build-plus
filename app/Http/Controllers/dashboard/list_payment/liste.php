<?php

namespace App\Http\Controllers\dashboard\list_payment;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use FedaPay\FedaPay;
use FedaPay\FedaPayObject;
use FedaPay\Transaction;
use App\Models\fedapay as feda;

class liste extends Controller
{

    public function test(Request $request)
    {
        $firstName = $request->firstName;
        $lastName = $request->lastName;
        $email = $request->email;
        $phone = $request->phone;
        $montant = $request->montant;
        $devis_id = $request->devis_id;

        FedaPay::setEnvironment(env('FEDAPAY_Environment'));
        FedaPay::setApiKey(env('FEDAPAY_PRIVATE_KEY'));

        $transaction = Transaction::create(array(
            "description" => "Transaction for john.doe@example.com",
            "amount" => $montant,
            "currency" => ["iso" => "XOF"],
            "callback_url" => route('paymentdevis.PageConfirmation'),
            "customer" => [
                "firstname" => $firstName,
                "lastname" => $lastName,
                "email" => $email,
                "phone_number" => [
                    "number" => "+229$phone",
                    "country" => "bj"
                ]
            ]
        ));
        $token = $transaction->generateToken();
        $this->fedapayValidatePay($transaction->id, $token->url, $devis_id);
        return redirect()->to($token->url);
    }


    private function fedapayValidatePay($fedapaytransactionId, $url, $devis_id)
    {
        if (!$this->IdfedapayExists($devis_id)) {
            $pay = new feda();
            $pay->fedapayTransactionId = $fedapaytransactionId;
            $pay->fedapayTransactionUrl = $url;
            $pay->devis()->associate($devis_id);
            $pay->save();

            return $pay;
        } else {

            $pay = feda::where('devis_id', $devis_id)->delete();
            $pay = new feda();
            $pay->fedapayTransactionId = $fedapaytransactionId;
            $pay->fedapayTransactionUrl = $url;
            $pay->devis()->associate($devis_id);
            $pay->save();

            return $pay;
        }
    }
    private function IdfedapayExists($id)
    {
        return feda::where('devis_id', $id)->exists();
    }

    public function view($id)
    {
        Fedapay::setEnvironment(env('FEDAPAY_Environment'));
        Fedapay::setApiKey(env('FEDAPAY_PRIVATE_KEY'));

        /**
         * @var FedaPayObject
         */
        $response = Transaction::search($id);
        $transactions = $response->transactions;
        $meta = $response->meta;
        // return view('dashboard.list_payment.liste');
    }

    public function confirm(Request $request)
    {
        $status = $request->status;
        $close = $request->close;
        $id = $request->id;

        if ($status == 'pending') {
            $status = 'en attente';
            feda::where('fedapayTransactionId', $id)->update(['statut' => $status]);
        } /* else {
        # code...
    } */


        return redirect()->route('dashboard.home');
    }
}
