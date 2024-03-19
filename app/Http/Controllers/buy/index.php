<?php

namespace App\Http\Controllers\buy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index extends Controller
{
    public function showbuyallprod()
    {
        
        $posts = $this->prod->select_prod_with_image();
        $commune = $this->prod->all();
        return view('buy.index', [
            'allprod' => $posts,
            'posts' => $commune,
            'path_manager' => $this->path_manager(0),
        ]); 
    }
}
