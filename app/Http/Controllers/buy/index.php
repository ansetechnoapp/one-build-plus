<?php

namespace App\Http\Controllers\buy;

use App\Models\prod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class index extends Controller
{
    public function showbuyallprod()
    {
        
        $posts = Prod::with('img')->get();
        $commune = prod::all();
        return view('buy.index', [
            'selectGround_typetableProdForHome' => prod::distinct()->select('ground_type')->get(),
            'selectCommunetableProdForHome' => prod::distinct()->select('department', 'communes')->get(),
            'allprod' => $posts,
            'posts' => $commune
        ]);
    }
}
