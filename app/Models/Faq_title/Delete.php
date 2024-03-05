<?php

namespace App\Models\Faq_title;

use App\Models\Faq_title;

trait Delete
{
    
    public function DeleteFaq_title($col,$id)
    {
        return Faq_title::where($col, $id)->delete();
    }
}