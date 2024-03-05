<?php

namespace App\Models\Faq;

use App\Models\Faq;

trait Delete
{

    public function DeleteFaq($col,$id)
    {
        return Faq::where($col, $id)->delete();
    }
}