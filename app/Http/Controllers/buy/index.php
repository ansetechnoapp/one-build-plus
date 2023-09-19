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
        $posts = prod::orderBy('id', 'desc')->get();
        $commune = prod::all();
        return view('buy.index', ['commune' => $selectCommunetableProdForHome,'allprod' => $posts,'posts' => $commune]);
    }
}
