<?php

namespace App\Http\Controllers\prod;

use App\Models\img;
use App\Models\prod;
use App\Models\devis;
use Illuminate\Http\Request;
use App\Models\additional_option;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class insert extends Controller
{

    public function generateDevisForProperty(Request $request)
    {

        $price = Session::get('prod_price');
        $prod_id = Session::get('prod_id');
        $user_id = $request->user_id;

        if (isset($price)  || isset($prod_id) || isset($user_id)) {
            if ($price == ''  || $prod_id == '' || $user_id == '') {
                echo "S'il vous plaît, remplissez tous les champs";
            } else {
                // Définition des règles de validation
                $rules = [
                    'price' => ['required', 'max:11'],
                ];

                // Définition des messages d'erreur personnalisés
                $messages = [
                    'price.priceregister' => "prix pas correct.",
                ];

                try {
                    $request->validate($rules, $messages);
                    // dd($price,$prod_id,$user_id,$registration_andf,$formality_fees,$notary_fees,$payment_frequency,$montant);

                    $insert =$this->Add_opt->createAdditional_option2($request,$prod_id);
                    $this->devi->createDevis($request,$user_id,$insert);

                    return redirect()->route('dashboard.home');
                } catch (ValidationException $e) {
                    // Gestion de l'exception ValidationException ici (par exemple, affichage des messages d'erreur)
                    // Récupération des messages d'erreur de validation
                    $errors = $e->validator->errors();

                    // Redirection vers la page de formulaire avec les messages d'erreur
                    return redirect()->route('property_detail', ['id' => $prod_id, 'price' => $price])->withErrors($errors);
                }
            }
        } else {

            echo "Entrer un Email correcte et verifier que tous les champs soit remplir ";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $posts = $this->prod->all();
        return view('show_all_product.index', ['posts' => $posts]);
    }

}
