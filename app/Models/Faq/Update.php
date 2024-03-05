<?php

namespace App\Models\Faq;

use App\Models\Faq;

trait Update
{

    public function UpdateFaq($request)
    {
        $prod = $this->findFaq('id', $request->id);
        $prod->update([
            'title_id' => $request->title_id,
            'question' => $request->question,
            'answer' => $request->answer,
        ]);
        return $prod;
    }
}
