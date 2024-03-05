<?php

namespace App\Models\Faq_title;

use App\Models\Faq_title;

trait Update
{

    public function UpdateFaqTitle($request)
    {
        $prod = $this->findFaq_title('id',$request->id);
            $prod->update([
                'title' => $request->title,
            ]);
        return $prod;
    }
}
