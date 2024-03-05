<?php

namespace App\Models\Faq;

use App\Models\Faq;

trait Select
{

    public function selectFaqTitle($title_id)
    {
        return Faq::where('title_id', $title_id)->get();
    }
    public function findFaq($col,$data)
    {
         return Faq::where($col, $data)->first();
    }
    public function getCollectionFaq($col,$data)
    {
         return Faq::where($col, $data)->get();
    }
}