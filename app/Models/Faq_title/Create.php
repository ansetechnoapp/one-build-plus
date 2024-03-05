<?php

namespace App\Models\Faq_title;

use App\Models\Faq_title;

trait Create
{
    
    public function createFaq_title($request)
    {
        return faq_title::create([
            'title' => $request->title,
        ]);
    }
}
