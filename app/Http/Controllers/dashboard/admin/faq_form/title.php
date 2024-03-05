<?php

namespace App\Http\Controllers\dashboard\admin\faq_form;

use App\Models\faq_title;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class title extends Controller
{
    public function view()
    {
        return view('dashboard.admin.faq_form.title',[
        'sub_path_admin'=>$this->sub_path_admin(),]);
    }
    public function showid(Request $request)
    {
        $posts2 = $this->FaqT->findFaq_title('id',$request->id);
        return view('dashboard.admin.faq_form.title', ['allprodupdate' => $posts2,
        'sub_path_admin'=>$this->sub_path_admin(),]);
    }
    public function save(Request $request): RedirectResponse
    {
        $rules = [
            'title' => 'required|string|max:100|min:2',
        ];
        $messages = [
            'title.titleregister' => "Entrer un texte.",
        ];

        try {
            $request->validate($rules, $messages);
            $this->FaqT->createFaq_title($request);
            return redirect()->route('faq_form',[
            'sub_path_admin'=>$this->sub_path_admin(),]);
        } catch (ValidationException $e) {
            // Gestion de l'exception ValidationException ici
            $errors = $e->validator->errors();
            return redirect()
                ->back()
                ->withErrors($errors);
        }
    }
    
    public function Update(Request $request)
    {

        // Définition des règles de validation
        $rules = [
            'title' => 'required|string|max:100|min:2',
        ];

        // Définition des messages d'erreur personnalisés
        $messages = [
            'title' => 'Entrer une bonne valeur',
        ];

        try {
            $request->validate($rules, $messages);
            $this->FaqT->UpdateFaqTitle($request);
            return redirect()->route('admin.faqs.admin',[
            'sub_path_admin'=>$this->sub_path_admin(),]);
        } catch (ValidationException $e) {
            // Gestion de l'exception ValidationException ici
            $errors = $e->validator->errors();
            return redirect()
                ->back()
                ->withErrors($errors);
        }
    }
}
