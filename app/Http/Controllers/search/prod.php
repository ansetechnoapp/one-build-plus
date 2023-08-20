<?php

namespace App\Http\Controllers\search;

use App\Http\Controllers\Controller;
use App\Models\prod as insertion;
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
        return view('show_all_product.index', ['posts' => $query]);
    }

    public function allselecttableProdForHome()
    {
        $selecttableProdForHome = insertion::orderBy('id', 'desc')->take(9)->get();
        $lastThree = insertion::orderBy('id', 'asc')->take(3)->get();
        $beforeLastThree = insertion::whereNotIn('id', $lastThree->pluck('id'))
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();

        return view('home.index', ['posts' => $selecttableProdForHome, 'posts1' => $lastThree, 'posts2' =>$beforeLastThree]);
    }
}
