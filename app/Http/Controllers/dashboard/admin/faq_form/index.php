<?php

namespace App\Http\Controllers\dashboard\admin\faq_form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class index extends Controller
{
    public function view()
    {
        $posts = $this->FaqT->all();
        // dd($posts);
        return view('dashboard.admin.faq_form.index', ['listTitleFaq' => $posts,
        'sub_path_admin'=>$this->path_manager(1),]);
    }
    public function save(Request $request): RedirectResponse
    {
        $rules = [
            'title_id' => 'required|integer',
            'question' => 'required|string|max:100|min:2',
            'answer' => 'required|string|max:500|min:2',
        ];
        $messages = [
            'title_id.title_idregister' => "Entrer un texte.",
            'question.questionregister' => 'Entrer un texte',
            'answer.answerregister' => 'Entrer un texte',
        ];

        try {
            $request->validate($rules, $messages);
            $this->faq->createFaq($request);
            return redirect()->route('admin.faqs.admin',[
            'sub_path_admin'=>$this->path_manager(3),]);
        } catch (ValidationException $e) {
            // Gestion de l'exception ValidationException ici
            $errors = $e->validator->errors();
            return redirect()
                ->back()
                ->withErrors($errors);
        }
    }
}
