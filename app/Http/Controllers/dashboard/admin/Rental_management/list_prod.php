<?php

namespace App\Http\Controllers\dashboard\admin\Rental_management;

use App\Models\prod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class list_prod extends Controller
{
    public function show(Request $request)
    {
        $headers = [
            '<th width="32">id</th>', '<th>propriétaire</th>', '<th>addresse</th>', '<th width="110">département</th>', '<th width="110">commune</th>', '<th width="130">arrondissement</th>',
            '<th width="85">superficie</th>', '<th width="70">prix</th>',
            '<th width="110">type location</th>', '<th>Description</th>', '<th width="60">action</th>'
        ];
        $cells=['id','landOwner_propertyName','address','department','communes','borough','area','price','locationType'];
        $posts = $this->prod->select_location_prod('oui','desc');
        return view('dashboard.admin.Rental_management.list_prod', [
            'allprod' => $posts,
            'header' => $headers,
            'cells' => $cells,
            'i' => 0,
        'sub_path_admin'=>$this->sub_path_admin(),]);
    }
}
