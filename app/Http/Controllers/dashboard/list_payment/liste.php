<?php

namespace App\Http\Controllers\dashboard\list_payment;

use FedaPay\FedaPay;
use FedaPay\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class liste extends Controller
{
    public function show($path)
    {
        // Get quotes from the database using the Quote model
        $quotes = $this->quote->findAllForUserWithRelations(Auth::user()->id);

        // Transform the quotes to match the expected format in the view
        $transformedQuotes = $quotes->map(function($quote) {
            $quote->dateDevis = $quote->quote_date;
            $quote->dateExpiration = $quote->expiration_date;
            $quote->prod_id = $quote->product_id;
            $quote->prod = $quote->product;

            // Map fedapayTransaction to fedapay for view compatibility
            if ($quote->fedapayTransaction) {
                $fedapay = new \stdClass();
                $fedapay->statut = $quote->fedapayTransaction->status;
                $fedapay->fedapayTransactionUrl = $quote->fedapayTransaction->transaction_url;
                $quote->fedapay = $fedapay;
            }

            return $quote;
        });

        return view('dashboard.list_payment.liste', [
            'listDevis' => $transformedQuotes,
            'sub_path_admin' => $path
        ]);
    }
    public function show2()
    {
        return $this->show($this->path_manager(0));
    }
    public function payfedapay(Request $request)
    {
        $firstName = $request->firstName;
        $lastName = $request->lastName;
        $email = $request->email;
        $phone = $request->phone;
        $montant = $request->montant;
        $quote_id = $request->devis_id; // Using devis_id from request but treating it as quote_id

        // Set up FedaPay environment
        FedaPay::setEnvironment(env('FEDAPAY_Environment'));
        FedaPay::setApiKey(env('FEDAPAY_PRIVATE_KEY'));

        // Create transaction
        $transaction = Transaction::create(array(
            "description" => "Transaction for $email",
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

        // Generate token and save transaction details
        $token = $transaction->generateToken();
        $this->fedapayTransaction->createOrUpdate(
            Auth::user()->id,
            $transaction->id,
            $token->url,
            $quote_id
        );

        return redirect()->to($token->url);
    }
    public function confirm(Request $request)
    {
        $status = $request->status;
        $close = $request->close;

        if ($status == 'pending') {
            $status = 'en attente';
            $this->fedapayTransaction->updateStatus($request->id, $status);
        }
        return $this->show($this->path_manager(1));
    }

    // public function view($id)
    // {
    //     Fedapay::setEnvironment(env('FEDAPAY_Environment'));
    //     Fedapay::setApiKey(env('FEDAPAY_PRIVATE_KEY'));

    //     /**
    //      * @var FedaPayObject
    //      */
    //     $response = Transaction::search($id);
    //     $transactions = $response->transactions;
    //     $meta = $response->meta;
    //     // return view('dashboard.list_payment.liste');
    // }
}
