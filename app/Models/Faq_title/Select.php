<?php

namespace App\Models\Faq_title;

use App\Models\Faq_title;

trait Select
{
    public function findFaq_title($col,$data)
    {
         return Faq_title::where($col, $data)->first();
    }
}