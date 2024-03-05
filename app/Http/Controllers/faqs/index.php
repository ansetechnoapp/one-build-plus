<?php

namespace App\Http\Controllers\faqs;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Faq_title;

class index extends Controller
{
    public function show()
    {
        $uniqueTitles = $this->FaqT->all();
        $html = ''; 

        foreach ($uniqueTitles as $data) {
            $html .= '<div id="generalfaq' . $data->id . '">';
            if (isset(Auth::user()->role)) {
                $html .= '<h5 class="text-2xl font-semibold">' . $data->title . '</h5>';
            } else {
                $html .= '<h5 class="text-2xl font-semibold">' . $data->title . '</h5>';
            }
            $html .= '<div id="accordion-collapseone" data-accordion="collapse" class="mt-6">';
            $faqTitle = $this->faq->selectFaqTitle($data->id);
            foreach ($faqTitle as $faq) {
                $html .= '<div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden">';
                $html .= '<h2 class="text-lg font-medium" id="accordion-collapse-heading-' . $faq->id . '">';
                $html .= '<button type="button" class="flex justify-between items-center p-5 w-full font-medium text-left" data-accordion-target="#accordion-collapse-body-' . $faq->id . '" aria-expanded="false" 
                aria-controls="accordion-collapse-body-' . $faq->id . '">';
                $html .= '<span>' . $faq->question . '</span>';
                $html .= '<svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">';
                $html .= '<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>';
                $html .= '</svg>';
                $html .= '</button>';
                $html .= '</h2>';
                $html .= '<div id="accordion-collapse-body-' . $faq->id . '" class="hidden" aria-labelledby="accordion-collapse-heading-' . $faq->id . '">';
                $html .= '<div class="p-5">';
                $html .= '<p class="text-slate-400 dark:text-gray-400">' . $faq->answer . '</p>';
                $html .= '</div>';
                $html .= '</div>';
            }
            $html .= '</div>';
            $html .= '</div>';
        }
        return view('faqs.index', ['listFaq' => $html, 'uniqueTitles' => $uniqueTitles]);
    }
}
