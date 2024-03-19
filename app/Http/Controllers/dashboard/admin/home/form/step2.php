<?php

namespace App\Http\Controllers\dashboard\admin\home\form;

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
            return view('dashboard.admin.home.form.step2', [
                'allprodupdate' => $this->prod->select_prod('id', $request->id),
                'sub_path_admin' => $this->path_manager(1),
            ]);
        } else {
            return view('dashboard.admin.home.form.step2', [
                'sub_path_admin' => $this->path_manager(1),
            ]);
        }
    }
    public function save_form(Request $request): RedirectResponse
    {
        // Définition des règles de validation
        $rules = [
            'borough' => 'required|string|max:100|min:2',
            'price' => 'required|integer',
            'price_min' => 'required|integer',
            'ground_type' => 'required|string',
            'description' => 'required|string',
        ];

        // Définition des messages d'erreur personnalisés
        $messages = [
            'borough' => 'Entrer une bonne valeur',
            'price' => 'prix',
            'price_min' => 'prix minimal',
            'ground_type' => 'Entrer un texte',
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
                    'price_min' => $request->price_min,
                    'description' => $request->description,
                    'ground_type' => $request->ground_type,
                    'location' => 'non',
                    'step' => '2',
                ];
                $this->prod->Update_table_prod_step($requestData);
                return redirect()->route('admin.form.view.prod.step3', [
                    'id' => $request->prod_id,
                    'sub_path_admin' => $this->path_manager(1),
                ]);
            } else {
                Session::put('stp2_borough', $request->borough);
                Session::put('stp2_price', $request->price);
                Session::put('stp2_price_min', $request->price_min);
                Session::put('stp2_ground_type', $request->ground_type);
                Session::put('stp2_description', $request->description);
            }
            return redirect()->route('admin.form.view.prod.step3', [
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
