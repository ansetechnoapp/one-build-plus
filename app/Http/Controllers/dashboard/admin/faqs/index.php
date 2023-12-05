<?php

namespace App\Http\Controllers\dashboard\admin\faqs;

use App\Models\faq;
use App\Models\faq_title;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class index extends Controller
{
    public function show()
    {
        $uniqueTitles = faq_title::all();
        $html = '';

        foreach ($uniqueTitles as $data) {
            $html .= '<div id="generalfaq' . $data->id . '" style="margin-top: 5%;">';
            if (isset(Auth::user()->role)) {
                if (Auth::user()->role == 'admin') {
                    $html .='<h5 class="text-2xl font-semibold">' . $data->title . '<br>
                    
                    <a href="' . route("faqsUpdate.title",['id'=>'' . $data->id . '']) . '"  class="btn btn-open hover-bg-green-700 text-white rounded-md" style="margin-left: 10px; margin-bottom: 10px;background-color: black;">
                    Modifier</a>
                     <a   onclick="openModal(\'delete.title.faq.' . $data->id . '\')" class="btn btn-open hover-bg-green-700 text-white rounded-md" style="margin-left: 10px; margin-bottom: 10px;background-color: black;cursor: pointer;">supprimer</a></h5>';

                } else {
                    $html .= '<h5 class="text-2xl font-semibold">' . $data->title . '</h5>';
                }
            } else {
                $html .= '<h5 class="text-2xl font-semibold">' . $data->title . '</h5>';
            }
            $html .= '<div id="accordion-collapseone" data-accordion="collapse" class="mt-6">';
            $faqTitle = faq::where('title_id', $data->id)->get();

            foreach ($faqTitle as $faq) {
                $html .='<div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden">'; 
                $html .='<h2 class="text-lg font-medium" id="accordion-collapse-heading-' . $faq->id . '">'; 
                $html .='<button type="button" class="flex justify-between items-center p-5 w-full font-medium text-left" data-accordion-target="#accordion-collapse-body-' . $faq->id . '" aria-expanded="false" aria-controls="accordion-collapse-body-' . $faq->id . '">'; $html .='<span>' . $faq->question . '</span>'; $html .='<svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">'; $html .='<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>'; $html .='</svg>'; $html .='</button>'; $html .='</h2>'; $html .='<div id="accordion-collapse-body-' . $faq->id . '" class="hidden" aria-labelledby="accordion-collapse-heading-' . $faq->id . '">'; $html .='<div class="p-5">'; $html .='<p class="text-slate-400 dark:text-gray-400">' . $faq->answer . '</p>'; $html .='</div>';
                if (isset(Auth::user()->role)) {
                    if (Auth::user()->role == 'admin') {

                        $html .='<a href="' . route("faqsUpdate",['id'=>'' . $faq->id . '']) . '"  class="btn hover:bg-green-700 text-white rounded-md" style="margin-left: 10px; margin-bottom: 10px;background-color: black;">
                        Modifier</a>
                        <a  onclick="openModal(\'delete.faq.' . $faq->id . '\')" class="btn hover:bg-green-700 text-white rounded-md" style="margin-left: 10px; margin-bottom: 10px;background-color: black;cursor: pointer;">supprimer</a>';
                    } else {
                    }
                } else {
                }
                $html .= '</div>';
            }       
            $html .= '</div>';
            $html .= '</div>'; // Fermez la div pour ce titre ici
        }
        return view('dashboard.admin.faqs.index', ['listFaq' => $html, 'uniqueTitles' => $uniqueTitles]);
    }
    public function deleteforfaq($id)
    {
        $faqTitle = faq::where('id', $id)->delete();
        return redirect()->back();
    }

    public function deleteforfaqtitle($id)
    {
        faq::where('title_id', $id)->delete();
        faq_title::where('id', $id)->delete();

        return redirect()->back();
    }
}

