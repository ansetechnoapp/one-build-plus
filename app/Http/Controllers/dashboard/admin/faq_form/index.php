<?php

namespace App\Http\Controllers\dashboard\admin\faq_form;

use App\Models\faq;
use App\Models\faq_title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class index extends Controller
{
    public function save(Request $request): RedirectResponse
    {
        $rules = [
            'title_id' => 'required|integer',
            'question' => 'required|string|max:100|min:2',
            'answer' => 'required|string|max:100|min:2',
        ];
        $messages = [
            'title_id.title_idregister' => "Entrer un texte.",
            'question.questionregister' => 'Entrer un texte',
            'answer.answerregister' => 'Entrer un texte',
        ];

        try {
            $request->validate($rules, $messages);

            $title_id = $request->title_id;
            $question = $request->question;
            $answer = $request->answer;

            faq::create([
                'title_id' => $title_id,
                'question' => $question,
                'answer' => $answer,
            ]);

            return redirect()->route('faqs.admin');
        } catch (ValidationException $e) {
            // Gestion de l'exception ValidationException ici
            $errors = $e->validator->errors();
            return redirect()
                ->back()
                ->withErrors($errors);
        }
    }
    public function view()
    {
        $posts = faq_title::all();
        // dd($posts);
        return view('dashboard.admin.faq_form.index', ['listTitleFaq' => $posts]);
    }
}
