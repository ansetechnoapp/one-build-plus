<?php

namespace App\Models\Faq;

use App\Models\Faq;

trait Create
{
    
    public function createFaq($request)
    {
        return Faq::create([
            'title_id' => $request->title_id,
            'question' => $request->question,
            'answer' => $request->answer,
        ]);
    }
}
