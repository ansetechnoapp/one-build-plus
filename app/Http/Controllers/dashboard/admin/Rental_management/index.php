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
            $description = $request->description;
            $status = $request->status;
            $number_of_bedrooms = $request->number_of_bedrooms;
            $number_of_bathrooms = $request->number_of_bathrooms;
            $locationType = $request->locationType;
            // dd($landOwner_propertyName,$address,$department,$communes,$borough,$area,$price,$description,$status,$number_of_bedrooms,$number_of_bathrooms,$locationType);

            $insert = prod::create([
                'landOwner_propertyName' => $landOwner_propertyName,
                'address' => $address,
                'department' => $department,
                'communes' => $communes,
                'borough' => $borough,
                'area' => $area,
                'price' => $price,
                'description' => $description,
                'status' => $status,
                'number_of_bedrooms' => $number_of_bedrooms,
                'number_of_bathrooms' => $number_of_bathrooms,
                'location' => 'oui',
                'locationType' => $locationType,
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

            return redirect()->route('Rental.management.list.prod');
        } catch (ValidationException $e) {
            // Gestion de l'exception ValidationException ici
            $errors = $e->validator->errors();
            return redirect()
                ->back()
                ->withErrors($errors);
        }
    }
}
