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
    public function showid(Request $request)
    {
        $posts = faq_title::all();
        $posts2 = faq::find($request->id);
        $posts3 = faq_title::where('id',$posts2->title_id)->first();
        return view('dashboard.admin.faq_form.index', ['listTitleFaq' => $posts,'allprodupdate' => $posts2,'currenttitle' => $posts3]);
    }
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
    public function Update(Request $request)
    {

        // Définition des règles de validation
        $rules = [
            'question' => 'required|string|max:100|min:2',
            'answer' => 'required|string|max:100|min:2',
        ];

        // Définition des messages d'erreur personnalisés
        $messages = [
            'question' => 'Entrer une bonne valeur',
            'answer' => 'Entrer une bonne valeur',
        ];

        try {
            $request->validate($rules, $messages);
            
            $prod = faq::findOrFail($request->id);

            $prod->update([
                'title_id' => $request->title_id,
                'question' => $request->question,
                'answer' => $request->answer,
            ]);

            return redirect()->route('faqs.admin');
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
