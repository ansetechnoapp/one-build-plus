<?php

namespace App\Http\Controllers\buy;

use App\Models\prod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class index extends Controller
{
    public function showbuyallprod()
    {
        $selectCommunetableProdForHome = prod::distinct()->select('department', 'communes')->get();
        $selectGround_typetableProdForHome = prod::distinct()->select('ground_type')->get();
        $posts = prod::orderBy('id', 'desc')->get();
        $commune = prod::all();
        return view('buy.index', ['ground_type' => $selectGround_typetableProdForHome,'commune' => $selectCommunetableProdForHome,'allprod' => $posts,'posts' => $commune]);
    }
}
