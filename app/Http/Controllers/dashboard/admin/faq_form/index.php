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
        $posts = $this->FaqT->all();
        $posts2 = $this->faq->findFaq('id',$request->id);
        $posts3 = $this->FaqT->findFaq_title('id',$posts2->title_id);
        return view('dashboard.admin.faq_form.index', ['listTitleFaq' => $posts,'allprodupdate' => $posts2,'currenttitle' => $posts3,
        'sub_path_admin'=>$this->sub_path_admin(),]);
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
            'sub_path_admin'=>$this->sub_path_admin(),]);
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
        $posts = $this->FaqT->all();
        // dd($posts);
        return view('dashboard.admin.faq_form.index', ['listTitleFaq' => $posts,
        'sub_path_admin'=>$this->sub_path_admin(),]);
    }
    public function Update(Request $request)
    {

        // Définition des règles de validation
        $rules = [
            'question' => 'required|string|max:100|min:2',
            'answer' => 'required|string|max:500|min:2',
        ];

        // Définition des messages d'erreur personnalisés
        $messages = [
            'question' => 'Entrer une bonne valeur',
            'answer' => 'Entrer une bonne valeur',
        ];

        try {
            $request->validate($rules, $messages);
            $this->faq->UpdateFaq($request);

            return redirect()->route('admin.faqs.admin',[
            'sub_path_admin'=>$this->sub_path_admin(),]);
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
