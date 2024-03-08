<?php

namespace App\Http\Controllers\buy;

use App\Models\Prod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class index extends Controller
{
    public function showbuyallprod()
    {
        
        $posts = $this->prod->select_prod_with_image();
        $commune = $this->prod->all();
        return view('buy.index', [
            'ground_type' => $this->prod->select_Ground_type(),
            'communes' =>$this->prod->select_Commune_table(),
            'allprod' => $posts,
            'posts' => $commune
        ]); 
    }
}
