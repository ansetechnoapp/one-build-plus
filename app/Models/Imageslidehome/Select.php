<?php

namespace App\Models\Imageslidehome;

use App\Models\Imageslidehome;

trait Select
{

    public function SelectImageslidehome($col,$value)
    {
        return Imageslidehome::where($col, $value)->first();
        // return Imageslidehome::find(1);
    }
}
