<?php

namespace App\Http\Controllers\dashboard\admin\faq_form;

use App\Models\faq;
use App\Models\faq_title;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class index extends Controller
{
    public function save(Request $request): RedirectResponse
    {
        $rules = [
            'title' => 'required|string|max:100|min:2',
            'question' => 'required|string|max:100|min:2',
            'answer' => 'required|string|max:100|min:2',
        ];
        $messages = [
            'title.titleregister' => "Entrer un texte.",
            'question.questionregister' => 'Entrer un texte',
            'answer.answerregister' => 'Entrer un texte',
        ];
        $customAttributes = [
            'titleregister' => 'Entrer un texte.',
            'questionregister' => 'Entrer un texte.',
            'answerregister' => 'Entrer un texte.',
        ];

        try {
            $request->validate($rules, $messages, $customAttributes);

            $title = $request->title;
            $question = $request->question;
            $answer = $request->answer;

            faq::create([
                'title' => $title,
                'question' => $question,
                'answer' => $answer,
            ]);

            return redirect()->route('faqs');
        } catch (ValidationException $e) {
            // Gestion de l'exception ValidationException ici
            $errors = $e->validator->errors();
            return redirect()
                ->back()
                ->withErrors($errors);
        }
    }
    public function show()
    {
        $posts = faq::all();
        return view('faqs.index', ['listFaq' => $posts]);
    }
    public function view()
    {
        $posts = faq_title::all();
        return view('dashboard.admin.faq_form.index', ['listTitleFaq' => $posts]);
    }
}