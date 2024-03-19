<?php

namespace App\Http\Controllers\dashboard\admin\Rental_management\form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class step2 extends Controller
{
    public function show(Request $request)
    {
        if ($request->id) {
            return view('dashboard.admin.Rental_management.form.step2', [
                'allprodupdate' => $this->prod->select_prod('id', $request->id),
                'sub_path_admin' => $this->path_manager(1),
            ]);
        } else {
            return view('dashboard.admin.Rental_management.form.step2', [
                'sub_path_admin' => $this->path_manager(1),
            ]);
        }
    }

    public function save_or_update_form(Request $request): RedirectResponse
    {
        // Définition des règles de validation
        $rules = [
            'borough' => 'required|string|max:100|min:2',
            'locationType' => 'required|string|max:100|min:2',
            'price' => 'required|integer',
            'number_of_bedrooms' => 'required|integer',
            'number_of_bathrooms' => 'required|integer',
            'description' => 'required|string',
        ];

        // Définition des messages d'erreur personnalisés
        $messages = [
            'borough' => 'Entrer une bonne valeur',
            'locationType' => 'Entrer une bonne valeur',
            'price' => 'prix',
            'number_of_bedrooms' => 'Entrer une bonne valeur',
            'number_of_bathrooms' => 'Entrer une bonne valeur',
            'description' => 'Entrer un texte',
        ];

        // Validation des données envoyées dans la requête

        try {
            $request->validate($rules, $messages);
            if ($request->prod_id) {
                $requestData = [
                    'prod_id' => $request->prod_id,
                    'borough' => $request->borough,
                    'price' => $request->price,
                    'description' => $request->description,
                    'number_of_bedrooms' => $request->number_of_bedrooms,
                    'number_of_bathrooms' => $request->number_of_bathrooms,
                    'locationType' => $request->locationType,
                    'location' => 'oui',
                    'step' => '2',
                ];
                $this->prod->Update_table_prod_step($requestData);
                return redirect()->route('admin.rent.form.view.prod.step3', [
                    'id' => $request->prod_id,
                    'sub_path_admin' => $this->path_manager(1),
                ]);
            } else {
                Session::put('stp2_borough', $request->borough);
                Session::put('stp2_locationType', $request->locationType);
                Session::put('stp2_price', $request->price);
                Session::put('stp2_number_of_bedrooms', $request->number_of_bedrooms);
                Session::put('stp2_number_of_bathrooms', $request->number_of_bathrooms);
                Session::put('stp2_description', $request->description);
            }
            return redirect()->route('admin.rent.form.view.prod.step3', [
                'sub_path_admin' => $this->path_manager(1),
            ]);
        } catch (ValidationException $e) {
            // Gestion de l'exception ValidationException ici
            $errors = $e->validator->errors();
            return redirect()
                ->back()
                ->withErrors($errors);
        }
    }
}
