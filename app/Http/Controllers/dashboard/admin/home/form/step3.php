<?php

namespace App\Http\Controllers\dashboard\admin\home\form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class step3 extends Controller
{
    public function show(Request $request)
    {
        if ($request->id) {
            return view('dashboard.admin.home.form.step3', ['allprodupdate' => $this->prod->select_prod('id', $request->id),
            'sub_path_admin'=>$this->path_manager(1),]);
        } else {
            return view('dashboard.admin.home.form.step3',[
            'sub_path_admin'=>$this->path_manager(1),]);
        }
    }
    public function save_form(Request $request): RedirectResponse
    {
        // Définition des règles de validation
        $rules = [
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        // Définition des messages d'erreur personnalisés
        $messages = [
            'main_image' => 'image important',
            'img1' => 'image',
            'img2' => 'image',
            'img3' => 'image',
            'img4' => 'image',
        ];

        // Validation des données envoyées dans la requête

        try {
            $request->validate($rules, $messages);
            if ($request->prod_id) {
                $this->Img->Update_table_All_Img($request);
                return redirect()->route('admin.list_prod',[
                'sub_path_admin'=>$this->path_manager(1),]);
            } else {
                $sessionData = [
                    'landOwner_propertyName' => Session::get('stp1_landOwner_propertyName'),
                    'address' => Session::get('stp1_address'),
                    'department' => Session::get('stp1_department'),
                    'communes' => Session::get('stp1_communes'),
                    'borough' => Session::get('stp2_borough'),
                    'area' =>  Session::get('stp1_area'),
                    'price' => Session::get('stp2_price'),
                    'price_min' => Session::get('stp2_price_min'),
                    'description' => Session::get('stp2_description'),
                    'ground_type' => Session::get('stp2_ground_type'),
                    'status' => Session::get('stp1_status'),
                    // Ajoutez d'autres données de session au besoin
                ];
                $insert = $this->prod->createProd($request, 'non',$sessionData);
                $this->Img->createImg($request, $insert);
                Session::put('stp1_landOwner_propertyName', '');
                Session::put('stp1_address', '');
                Session::put('stp1_department', '');
                Session::put('stp1_communes', '');
                Session::put('stp1_area', '');
                Session::put('stp1_status', '');
                Session::put('stp2_borough', '');
                Session::put('stp2_price', '');
                Session::put('stp2_price_min', '');
                Session::put('stp2_ground_type', '');
                Session::put('stp2_description', '');
            }
            return redirect()->route('admin.list_prod',[
            'sub_path_admin'=>$this->path_manager(1),]);
        } catch (ValidationException $e) {
            // Gestion de l'exception ValidationException ici
            $errors = $e->validator->errors();
            return redirect()
                ->back()
                ->withErrors($errors);
        }
    }
}
