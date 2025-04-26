<?php

namespace App\Http\Controllers\buy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index extends Controller
{
    public function showbuyallprod()
    {
        // Utilisation du nouveau modèle Product
        $posts = $this->product->getAllWithImages();
        $commune = $this->product->all();
        return view('buy.index', [
            'allprod' => $posts,
            'posts' => $commune,
            'path_manager' => $this->path_manager(0),
        ]);
    }
}
