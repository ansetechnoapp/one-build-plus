<?php

namespace App\Http\Controllers\dashboard\admin\faq_form;

use App\Models\faq;
use App\Models\faq_title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
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
        $customAttributes = [
            'title_idregister' => 'Entrer un texte.',
            'questionregister' => 'Entrer un texte.',
            'answerregister' => 'Entrer un texte.',
        ];

        try {
            $request->validate($rules, $messages, $customAttributes);

            $title_id = $request->title_id;
            $question = $request->question;
            $answer = $request->answer;

            faq::create([
                'title_id' => $title_id,
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
        $uniqueTitles = faq_title::all();
        $html = '';

        foreach ($uniqueTitles as $data) {
            $html .= '<div id="generalfaq'.$data->id.'">';
            $html .= '<h5 class="text-2xl font-semibold">' . $data->title . '</h5>';
            $html .= '<div id="accordion-collapseone" data-accordion="collapse" class="mt-6">';
            $faqTitle = faq::where('title_id', $data->id)->get();
            foreach ($faqTitle as $faq) {
            $html .= '<div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden">';
            $html .= '<h2 class="text-lg font-medium" id="accordion-collapse-heading-'. $faq->id .'">';
            $html .= '<button type="button" class="flex justify-between items-center p-5 w-full font-medium text-left" data-accordion-target="#accordion-collapse-body-'.$faq->id.'" aria-expanded="false" aria-controls="accordion-collapse-body-'.$faq->id.'">';
            $html .= '<span>' . $faq->question . '</span>';
            $html .= '<svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">';
            $html .= '<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>';
            $html .= '</svg>';
            $html .= '</button>';
            $html .= '</h2>';
            $html .= '<div id="accordion-collapse-body-'.$faq->id.'" class="hidden" aria-labelledby="accordion-collapse-heading-'. $faq->id .'">';
            $html .= '<div class="p-5">';
            $html .= '<p class="text-slate-400 dark:text-gray-400">' . $faq->answer . '</p>';
            $html .= '</div>';
        }
        $html .= '</div>';
        $html .= '</div>';
        }
         return view('faqs.index', ['listFaq' => $html,'uniqueTitles' => $uniqueTitles]);
    }
    public function view()
    {
        $posts = faq_title::all();
        return view('dashboard.admin.faq_form.index', ['listTitleFaq' => $posts]);
    }
}
