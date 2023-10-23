<?php

namespace App\Http\Controllers\dashboard\admin\faq_form;

use App\Models\faq_title;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class title extends Controller
{
    public function save(Request $request): RedirectResponse
    {
        $rules = [
            'title' => 'required|string|max:100|min:2',
        ];
        $messages = [
            'title.titleregister' => "Entrer un texte.",
        ];
        $customAttributes = [
            'titleregister' => 'Entrer un texte.',
        ];

        try {
            $request->validate($rules, $messages, $customAttributes);

            $title = $request->title;

            faq_title::create([
                'title' => $title,
            ]);

            return redirect()->route('faq_form');
        } catch (ValidationException $e) {
            // Gestion de l'exception ValidationException ici
            $errors = $e->validator->errors();
            return redirect()
                ->back()
                ->withErrors($errors);
        }
    }
}
