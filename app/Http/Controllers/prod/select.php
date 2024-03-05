<?php

namespace App\Http\Controllers\prod;


use App\Models\img;
use App\Models\Prod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class select extends Controller
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
        return view('property-detail.index', ['data' => $query, 'imgdata' => $query2/* , 'img1' => $imgUrl1 */]);
    }
    public function show($num = '5')
    {
        $headers = [
            '<th width="29">id</th>', '<th>propriétaire</th>', '<th>addresse</th>', '<th>département</th>', '<th>commune</th>', '<th>arrondissement</th>',
            '<th width="85">superficie</th>', '<th width="70">prix</th>', '<th width="90">prix promo</th>',
            '<th width="85">type de terre</th>', '<th>Description</th>', '<th width="65">action</th>'
        ];
        if (isset($_GET['page'])) {
            $posts = $this->prod->select_location_paginate_prod('non', 'desc', 5);
        } else {
            $posts = $this->prod->select_take_location_prod('non', 'desc', $num);
        }
        return view(
            'dashboard.admin.list_prod.index',
            [
                'allprod' => $posts,
                'header' => $headers,
                'ground_type' => $this->prod->select_Ground_type(),
                'communes' => $this->prod->select_Commune_table(),
                'sub_path_admin'=>$this->sub_path_admin(),
            ]
        );
    }
    public function showAllProduct()
    {
        $headers = [
            '<th width="29">id</th>', '<th>propriétaire</th>', '<th>addresse</th>', '<th>département</th>', '<th>commune</th>', '<th>arrondissement</th>',
            '<th width="85">superficie</th>', '<th width="70">prix</th>', '<th width="90">prix promo</th>',
            '<th width="85">type de terre</th>', '<th>Description</th>', '<th width="65">action</th>'
        ];
        $posts = $this->prod->select_location_prod('non', 'desc');
        return view('dashboard.admin.list_prod.index', ['allprod' => $posts, 'header' => $headers]);
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
