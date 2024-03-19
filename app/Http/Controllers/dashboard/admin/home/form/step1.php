<?php

namespace App\Http\Controllers\dashboard\admin\home\form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class step1 extends Controller
{
    public function show(Request $request)
    {
        if ($request->id) {
            return view('dashboard.admin.home.form.step1', [
                'allprodupdate' => $this->prod->select_prod('id', $request->id),
                'sub_path_admin' => $this->path_manager(1),
            ]);
        } else {
            return view('dashboard.admin.home.form.step1', [
                'sub_path_admin' => $this->path_manager(1),
            ]);
        }
    }

    public function save_form(Request $request): RedirectResponse
    {
        $rules = [
            'landOwner_propertyName' => 'required|string|max:100|min:2',
            'address' => 'required|string|max:100|min:2',
            'department' => 'required|string|max:100|min:2',
            'communes' => 'required|string|max:100|min:2',
            'area' => 'required|string|max:100|min:2',
            'status' => 'required|string',
        ];

        // Définition des messages d'erreur personnalisés
        $messages = [
            'landOwner_propertyName' => 'Entrer une bonne valeur',
            'address' => 'Entrer une bonne valeur',
            'department' => 'Entrer une bonne valeur',
            'communes' => 'Entrer une bonne valeur',
            'area' => 'Entrer une bonne valeur',
            'status' => 'Entrer une bonne valeur',

        ];

        // Validation des données envoyées dans la requête 

        try {
            $request->validate($rules, $messages);
            if ($request->prod_id) {
                $requestData = [
                    'prod_id' => $request->prod_id,
                    'landOwner_propertyName' => $request->landOwner_propertyName,
                    'address' => $request->address,
                    'department' => $request->department,
                    'communes' => $request->communes,
                    'area' => $request->area,
                    'status' => $request->status,
                    'location' => 'non',
                    'step' => '1',
                ];
                $this->prod->Update_table_prod_step($requestData);
                return redirect()->route('admin.form.view.prod.step2', [
                    'id' => $request->prod_id,
                    'sub_path_admin' => $this->path_manager(1),
                ]);
            } else {
                Session::put('stp1_landOwner_propertyName', $request->landOwner_propertyName);
                Session::put('stp1_address', $request->address);
                Session::put('stp1_department', $request->department);
                Session::put('stp1_communes', $request->communes);
                Session::put('stp1_area', $request->area);
                Session::put('stp1_status', $request->status);
            }
            return redirect()->route('admin.form.view.prod.step2', [
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
