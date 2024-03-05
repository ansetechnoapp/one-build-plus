<?php

namespace App\Models\Img;

use App\Models\Img;

trait Select
{

    public function InfoImg($id)
    {
        return Img::where('prod_id', $id)->get();
    }
}
