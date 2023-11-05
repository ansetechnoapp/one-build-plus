<?php

namespace App\Http\Controllers\dashboard\admin\Rental_management;

use App\Models\img;
use App\Models\prod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class upadate_prod extends Controller
{
    public function show(Request $request)
    {
        $id = $request->id;
        $query = prod::where('id', $id)
            ->first();
        return view('dashboard.admin.Rental_management.upadate_prod', ['allprodupdate' => $query]);
    }
    public function updateprod(Request $request)
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
            'status' => 'required|string',
            'number_of_bedrooms' => 'required|integer',
            'number_of_bathrooms' => 'required|integer',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'locationType' => 'required|string',
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
            'status' => 'Entrer une bonne valeur',
            'number_of_bedrooms' => 'Entrer une bonne valeur',
            'number_of_bathrooms' => 'Entrer une bonne valeur',
            'main_image' => 'image important',
            'img1' => 'image',
            'img2' => 'image',
            'img3' => 'image',
            'img4' => 'image',
            'description' => 'Entrer un texte',
            'locationType' => 'Entrer un texte',
        ];

        try {
            $request->validate($rules, $messages);

            $prod_id = $request->prod_id;
            $prod = prod::findOrFail($prod_id);

            $prod->update([
                'landOwner_propertyName' => $request->landOwner_propertyName,
                'address' => $request->address,
                'department' => $request->department,
                'communes' => $request->communes,
                'borough' => $request->borough,
                'area' => $request->area,
                'price' => $request->price,
                'description' => $request->description,
                'status' => $request->status,
                'number_of_bedrooms' => $request->number_of_bedrooms,
                'number_of_bathrooms' => $request->number_of_bathrooms,
                'location' => 'oui',
                'locationType' => $request->locationType,
            ]);
            if ($request->hasFile('main_image')) {

                $filename = time() . '.' . $request->main_image->extension();
                $path = $request->file('main_image')->storeAs(
                    'imageprod',
                    $filename,
                    'public'
                );

                img::where('prod_id', $prod_id)
                    ->update(['main_image' => $path]);
            }
            for ($i = 1; $i <= 4; $i++) {
                $imgField = 'img' . $i;
                if ($request->hasFile($imgField)) {
                    $imgFilename = time() . '_img' . $i . '.' . $request->$imgField->extension();
                    $imgPath = $request->file($imgField)->storeAs(
                        'imageprod',
                        $imgFilename,
                        'public'
                    );

                    img::where('prod_id', $prod_id)
                        ->update([$imgField => $imgPath]);
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


        // return view('dashboard.admin.list_prod.index', ['allprod' => $posts]);
    }
}