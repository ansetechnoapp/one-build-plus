<?php

namespace App\Http\Controllers\dashboard\admin\list_prod;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index extends Controller
{
    public function show($num = '5')
    {
        $headers = [
            '<th width="32">id</th>', '<th>propriétaire</th>', '<th>addresse</th>', '<th width="110">département</th>', '<th width="110">commune</th>', '<th width="130">arrondissement</th>',
            '<th width="85">superficie</th>', '<th width="70">prix</th>', '<th width="90">prix promo</th>',
            '<th width="110">type de terre</th>', '<th>Description</th>', '<th width="60">action</th>'
        ];
        $cells=['id','landOwner_propertyName','address','department','communes','borough','area','price','price_min','ground_type'];
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
                'cells' => $cells,
                'i' => 0,
                'ground_type' => $this->prod->select_Ground_type(),
                'communes' => $this->prod->select_Commune_table(),
                'sub_path_admin' => $this->path_manager(2),
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
        $cells=['id','landOwner_propertyName','address','department','communes','borough','area','price','price_min','ground_type'];
        $posts = $this->prod->select_location_prod('non', 'desc');
        return view('dashboard.admin.list_prod.index', [
            'allprod' => $posts, 
            'header' => $headers,
            'cells' => $cells,
            'i' => 0,
            'sub_path_admin' => $this->path_manager(1),]);
    }

}
