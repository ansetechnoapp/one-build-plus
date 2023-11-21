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
        $registration_andf = $request->registration_andf;
        $formality_fees = $request->formality_fees;
        $notary_fees = $request->notary_fees;
        $payment_frequency = $request->payment_frequency;
        $montant = $request->montant;

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

                    $insert = additional_option::create([
                        'registration_andf' => $registration_andf,
                        'formality_fees' => $formality_fees,
                        'notary_fees' => $notary_fees,
                        'payment_frequency' => $payment_frequency,
                        'users_id' => $user_id,
                        'prod_id' => $prod_id,
                    ]);

                    $devis = new devis();
                    $devis->price = $price;
                    $devis->montant = $montant;
                    $devis->prod_id = $prod_id;
                    $devis->users_id = $user_id;
                    $devis->dateDevis = now()->format('Y-m-d');
                    $devis->dateExpiration = now()->addDays(7)->format('Y-m-d');
                    $devis->additional_option()->associate($insert); // Associe le modèle additional_option à la relation
                    $devis->save();
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
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Définition des règles de validation
        $rules = [
            'landOwner_propertyName' => 'required|string|max:100|min:2',
            'address' => 'required|string|max:100|min:2',
            'department' => 'required|string|max:100|min:2',
            'communes' => 'required|string|max:100|min:2',
            'borough' => 'required|string|max:100|min:2',
            'area' => 'required|string|max:100|min:2',
            'price' => 'required|integer',
            'price_min' => 'required|integer',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'ground_type' => 'required|string',
        ];

        // Définition des messages d'erreur personnalisés
        $messages = [
            'landOwner_propertyName' => 'Entrer une bonne valeur',
            'address' => 'Entrer une bonne valeur',
            'department' => 'Entrer une bonne valeur',
            'communes' => 'Entrer une bonne valeur',
            'borough' => 'Entrer une bonne valeur',
            'area' => 'Entrer une bonne valeur',
            'price' => 'prix',
            'price_min' => 'prix minimal',
            'main_image' => 'image important',
            'img1' => 'image',
            'img2' => 'image',
            'img3' => 'image',
            'img4' => 'image',
            'description' => 'Entrer un texte',
            'ground_type' => 'Entrer un texte',
        ];

        // Validation des données envoyées dans la requête

        try {
            $request->validate($rules, $messages);

            $landOwner_propertyName = $request->landOwner_propertyName;
            $address = $request->address;
            $department = $request->department;
            $communes = $request->communes;
            $borough = $request->borough;
            $area = $request->area;
            $price = $request->price;
            $price_min = $request->price_min;
            $description = $request->description;
            $ground_type = $request->ground_type;
            $status = $request->status;

            $insert = prod::create([
                'landOwner_propertyName' => $landOwner_propertyName,
                'address' => $address,
                'department' => $department,
                'communes' => $communes,
                'borough' => $borough,
                'area' => $area,
                'price' => $price,
                'price_min' => $price_min,
                'description' => $description,
                'ground_type' => $ground_type,
                'status' => $status,
                'location' => 'non',
            ]);

            $img = new img();
            $filename = time() . '.' . $request->main_image->extension();
            $path = $request->file('main_image')->storeAs(
                'imageprod',
                $filename,
                'public'
            );
            $img->main_image = $path;
            $img->img1 = null;
            $img->img2 = null;
            $img->img3 = null;
            $img->img4 = null;
            $img->prod()->associate($insert);
            $img->save();

            // Ajout des images supplémentaires
            for ($i = 1; $i <= 4; $i++) {
                $imgField = 'img' . $i;
                if ($request->hasFile($imgField)) {
                    $imgFilename = time() . '_img' . $i . '.' . $request->$imgField->extension();
                    $imgPath = $request->file($imgField)->storeAs(
                        'imageprod',
                        $imgFilename,
                        'public'
                    );

                    $img->$imgField = $imgPath;
                    $img->save();
                }
            }

            return redirect()->route('list_prod');
        } catch (ValidationException $e) {
            // Gestion de l'exception ValidationException ici
            $errors = $e->validator->errors();
            return redirect()
                ->back()
                ->withErrors($errors);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $posts = prod::all();
        return view('show_all_product.index', ['posts' => $posts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
