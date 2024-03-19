<?php

namespace App\Http\Controllers\dashboard\admin\Rental_management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class list_prod extends Controller
{
    public function show(Request $request,$num = '5') 
    {
        $headers = [
            '<th width="32">id</th>', '<th>propriétaire</th>', '<th>addresse</th>', '<th width="110">département</th>', '<th width="110">commune</th>', '<th width="130">arrondissement</th>',
            '<th width="85">superficie</th>', '<th width="70">prix</th>',
            '<th width="110">type location</th>', '<th>Description</th>', '<th width="60">action</th>'
        ];
        $cells=['id','landOwner_propertyName','address','department','communes','borough','area','price','locationType'];
        if (isset($_GET['page'])) {
            $posts = $this->prod->select_location_paginate_prod('oui', 'desc', 5);
        } else {
            $posts = $this->prod->select_take_location_prod('oui', 'desc', $num);
        }
        
        return view('dashboard.admin.Rental_management.list_prod', [
            'allprod' => $posts,
            'header' => $headers,
            'cells' => $cells,
            'i' => 0,
        'sub_path_admin'=>$this->path_manager(2),]);
    }
    public function showAllProductRental()
    {
        $headers = [
            '<th width="32">id</th>', '<th>propriétaire</th>', '<th>addresse</th>', '<th width="110">département</th>', '<th width="110">commune</th>', '<th width="130">arrondissement</th>',
            '<th width="85">superficie</th>', '<th width="70">prix</th>',
            '<th width="110">type location</th>', '<th>Description</th>', '<th width="60">action</th>'
        ];
        $cells=['id','landOwner_propertyName','address','department','communes','borough','area','price','locationType'];
        $posts = $this->prod->select_location_prod('oui', 'desc');
        return view('dashboard.admin.Rental_management.list_prod', ['allprod' => $posts, 'header' => $headers,'i' => 0,
        'sub_path_admin' => $this->path_manager(1),
        'cells' => $cells]);
    }
}
