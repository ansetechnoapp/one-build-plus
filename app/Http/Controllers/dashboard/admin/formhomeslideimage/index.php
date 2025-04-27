<?php

namespace App\Http\Controllers\dashboard\admin\formhomeslideimage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class index extends Controller
{
    public function view()
    {
        return view('dashboard.admin.formhomeslideimage.index', [
            'sub_path_admin' => $this->path_manager(1),
        ]);
    }

    public function update(Request $request)
    {

        $rules = [
            'img1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5000',
            'img2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5000',
            'img3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5000',
        ];
        $messages = [
            'img1' => 'erreur de chargement de l\'image 1, la taille de l\'image ne doit pas depasser 5Mo',
            'img2' => 'erreur de chargement de l\'image 2, la taille de l\'image ne doit pas depasser 5Mo',
            'img3' => 'erreur de chargement de l\'image 3, la taille de l\'image ne doit pas depasser 5Mo',
        ];
        try {
            $request->validate($rules, $messages);
            $imgFields = ['img1', 'img2', 'img3'];
            $dbFields = ['image1', 'image2', 'image3'];

            foreach ($imgFields as $index => $imgField) {
                if ($request->hasFile($imgField) && !$request->$imgField->getError()) {
                    $dbField = $dbFields[$index];
                    $getImg = $this->homeSliderImage->SelectImageslidehome('id', 1);

                    if ($getImg && isset($getImg->$dbField)) {
                        Storage::disk('public')->delete($getImg->$dbField);
                    }

                    $imgPath = $request->file($imgField)->store('imageslidehome', 'public');
                    $this->homeSliderImage->updateOrCreate(
                        ['id' => 1],
                        [$dbField => $imgPath]
                    );
                }
            }
            return redirect()->route('home', [
                'sub_path_admin' => $this->sub_path_admin(),
            ])->with('success', 'Mise à jour réussie');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            return redirect()->back()->withErrors($errors);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Une erreur est survenue.');
        }
    }
}
