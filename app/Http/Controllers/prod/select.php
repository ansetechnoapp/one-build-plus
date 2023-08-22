<?php

namespace App\Http\Controllers\prod;

use App\Models\img;
use App\Models\prod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class select extends Controller
{
    public function receptiondata(Request $request)
    {
        $id = $request->id;
        $query = prod::where('id', $id)
            ->get();
        $query2 = img::where('prod_id', $id)
            ->get();

        // Convertir le tableau en une chaîne de caractères
        /* $imgUrls = $query2->pluck('main_image')->toArray();
        $imgUrlsString = implode(', ', $imgUrls); */

        // Utiliser la chaîne de caractères avec Storage::url()
        /* $imgUrl1 = Storage::url($imgUrlsString); */
        return view('property-detail.index', ['data' => $query, 'imgdata' => $query2/* , 'img1' => $imgUrl1 */]);
    }
    public function show()
    {
        $posts = prod::all();
        return view('dashboard.admin.list_prod.index', ['allprod' => $posts]);
    }
    
    public function receptiondata1(Request $request)
    {
        // dd('ee');
        $price = $request->price;
        $id = $request->id;
        // dd($price,$id);
        return view('dashboard.payment.index', compact('price', 'id'));
    }
}
