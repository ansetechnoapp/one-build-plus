<?php

namespace App\Http\Controllers\search;

use App\Http\Controllers\Controller;
use App\Models\prod\insert as insertion;
use Illuminate\Http\Request;

class prod extends Controller
{
    
public function selectsearch(Request $request)
    {
        // dd($request);
        $groundType = $request->ground_type;
        $communes = $request->communes;
        $priceMax = $request->price_max;
        $priceMin = $request->price_min;
        //  dd($groundType, $communes, $priceMin, $priceMax);
        
        $query = insertion::where('ground_type', $groundType)
        ->where('communes', $communes)
        ->wherebetween('price', [$priceMin, $priceMax])
        ->get();
        dd($query);
        return view('home.index', ['results' => $query]);
    }

    public function selectsearchcommune()
    {
        $posts = insertion::all();
        return view('home.index', ['posts' => $posts]);
    }
}
