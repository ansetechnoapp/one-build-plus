<?php

namespace App\Http\Controllers\prod;


use App\Models\img;
use App\Models\prod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

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
          $headers = ['id', 'propriétaire', 'addresse', 'département', 'commune', 'arrondissement', 'superficie', 'prix', 'prix promo', 'type de terre', 'Description', 'action'];
          $posts = prod::where('location','non')->orderBy('id', 'desc')->get();
        return view('dashboard.admin.list_prod.index', ['allprod' => $posts,'header' => $headers]);
    }
    public function receptiondata1(Request $request)
    {
        // dd('ee');
        $price = $request->price;
        $id = $request->id;
        $payment_frequency = $request->payment_frequency;
        if (isset($price) && isset($id)) {
            Session::put('prod_price', $price);
            Session::put('prod_id', $id);
            Session::put('payment_frequency', $payment_frequency);
            return view('dashboard.payment.index');
        }
    }
}
