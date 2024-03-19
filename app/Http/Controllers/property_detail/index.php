<?php

namespace App\Http\Controllers\property_detail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class index extends Controller
{
    public function receptiondata(Request $request)
    {
        $query = $this->prod->select_prod('id', $request->id);
        $query2 = $this->Img->InfoImg($request->id);

        // Convertir le tableau en une chaîne de caractères
        /* $imgUrls = $query2->pluck('main_image')->toArray();
        $imgUrlsString = implode(', ', $imgUrls); */

        // Utiliser la chaîne de caractères avec Storage::url()
        /* $imgUrl1 = Storage::url($imgUrlsString); */
        return view('property-detail.index', [
            'data' => $query, 'imgdata' => $query2,
            'posts1' => $this->prod->select_last_prod(3, 'asc'),
            'path_manager' => $this->path_manager(0),
            /* , 'img1' => $imgUrl1 */
        ]);
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
            return view('dashboard.payment.index',['path_manager' => $this->path_manager(0),]);
        }
    }
}
