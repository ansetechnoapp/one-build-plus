<?php

namespace App\Http\Controllers\dashboard\home;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class index extends Controller
{
    public function listDevisForUser()
    {
        // Get quotes from the database
        $quotes = $this->quote->findAllForUserWithRelations(Auth::user()->id);

        // Transform the quotes to match the expected format in the view
        $transformedQuotes = $quotes->map(function($quote) {
            $quote->dateDevis = $quote->quote_date;
            $quote->dateExpiration = $quote->expiration_date;
            $quote->prod_id = $quote->product_id;
            $quote->prod = $quote->product;
            return $quote;
        });

        return view('dashboard.home.index', [
            'listDevis' => $transformedQuotes,
            'sub_path_admin' => $this->path_manager(0)
        ]);
    }
    public function genererDevis(Request $request)
    {
        $devis_id = $request->devis_id;
        $product_id = $request->prod_id;
        $user_id = Auth::user()->id;
        $user = $this->user->findUser('id', $user_id, $this->cache_time());

        if ($user_id !== null && $product_id !== null) {
            $additionalOption = $this->additionalOption->findByProductAndUser($product_id, $user_id);

            // If we have a specific quote ID, use that
            if ($devis_id) {
                $getDevis = $this->quote->findOrFail($devis_id);
            } else {
                // Otherwise find by product and user
                $getDevis = $this->quote->findByProductAndUser($product_id, $user_id);
            }

            if ($user['user'] && $additionalOption && $getDevis) {
                $data = [
                    'numDevis' => $getDevis->id,
                    'nom' => $user['user']->lastName,
                    'prenom' => $user['user']->firstName,
                    'email' => $user['user']->email,
                    'service' => $additionalOption->registration_andf,
                    'service1' => $additionalOption->formality_fees,
                    'service2' => $additionalOption->notary_fees,
                    'price' => $getDevis->price,
                    'montantTotal' => $getDevis->montant,
                    'dateDevis' => $getDevis->quote_date,
                    'dateExpiration' => $getDevis->expiration_date,
                ];

                return Pdf::loadView('devis.index', $data)->setPaper('A4', 'Portrait')->stream();
            } else {
                // Handle case where models were not found
                return redirect()->route('dashboard')->with('error', 'Quote information not found');
            }
        } else {
            return redirect()->route('home');
        }
    }
}
