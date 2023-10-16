<?php

namespace App\Http\Controllers\dashboard\admin\Rental_management;

use App\Models\img;
use App\Models\prod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class index extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        // Définition des règles de validation
        $rules = [
            'land_owner' => 'required|string|max:100|min:2',
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
            'land_owner' => 'Entrer une bonne valeur',
            'address' => 'Entrer une bonne valeur',
            'department' => 'Entrer une bonne valeur',
            'communes' => 'Entrer une bonne valeur',
            'borough' => 'Entrer une bonne valeur',
            'area' => 'Entrer une bonne valeur',
            'price' => 'pris',
            'price_min' => 'prix minimal',
            'main_image' => 'image important',
            'img1' => 'image',
            'img2' => 'image',
            'img3' => 'image',
            'img4' => 'image',
            'description' => 'Entrer un texte',
            'ground_type' => 'Entrer un texte',
        ];

        // Définition des noms de champs personnalisés
        $customAttributes = [
            'land_owner' => 'Entrer une bonne valeur',
            'address' => 'Entrer une bonne valeur',
            'department' => 'Entrer une bonne valeur',
            'communes' => 'Entrer une bonne valeur',
            'borough' => 'Entrer une bonne valeur',
            'area' => 'Entrer une bonne valeur',
            'price' => 'pris',
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
            $request->validate($rules, $messages, $customAttributes);

            $land_owner = $request->land_owner;
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
            $propertyName  = $request->propertyName;
            $number_of_bedrooms = $request->number_of_bedrooms;
            $number_of_bathrooms = $request->number_of_bathrooms;
            $monthlyRent = $request->monthlyRent;
            $location = $request->location;
            $locationType = $request->locationType;

            $insert = prod::create([
                'land_owner' => $land_owner,
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
                'propertyName' => $propertyName,
                'number_of_bedrooms' => $number_of_bedrooms,
                'number_of_bathrooms' => $number_of_bathrooms,
                'monthlyRent' => $monthlyRent,
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
}
