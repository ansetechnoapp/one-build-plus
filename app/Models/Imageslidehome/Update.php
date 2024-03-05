<?php

namespace App\Models\Imageslidehome;

use App\Models\Imageslidehome;


trait Update
{

    public function UpdateImageslidehome($imgField,$imgPath)
    {
        return Imageslidehome::updateOrCreate(['id' => 1], [$imgField => $imgPath]);
    }
}