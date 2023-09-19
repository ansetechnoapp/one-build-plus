<?php

namespace App\Http\Controllers\show_all_product;

use App\Http\Controllers\Controller;
use App\Models\prod as crudProd;
use Illuminate\Http\Request;

class index extends Controller
{
    public function selectsearch(Request $request)
    {
        // dd($request);
        $groundType = $request->ground_type;
        $communes = $request->communes;
        $priceMax = $request->price_max;
        $priceMin = $request->price_min;
        //  dd($groundType, $communes, $priceMin, $priceMax);

        $selectCommunetableProdForHome = crudProd::distinct()->select('department', 'communes')->get();
        $selectGround_typetableProdForHome = crudProd::distinct()->select('ground_type')->get();
        $query = crudProd::where('ground_type', $groundType)
            ->where('communes', $communes)
            ->wherebetween('price', [$priceMin, $priceMax])
            ->get();
        return view('show_all_product.index', ['ground_type' => $selectGround_typetableProdForHome,'commune' => $selectCommunetableProdForHome,'posts' => $query]);
    }
}
