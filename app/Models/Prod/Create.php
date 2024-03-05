<?php

namespace App\Models\Prod;

use App\Models\Prod;
use Illuminate\Support\Facades\Session;

trait Create
{

    public function createProd($request, $loc)
    {
        return Prod::create([
            'landOwner_propertyName' => Session::get('stp1_landOwner_propertyName'),
            'address' => Session::get('stp1_address'),
            'department' => Session::get('stp1_department'),
            'communes' => Session::get('stp1_communes'),
            'borough' => Session::get('stp2_borough'),
            'area' =>  Session::get('stp1_area'),
            'price' => Session::get('stp2_price'),
            'price_min' => Session::get('stp2_price_min'),
            'description' => Session::get('stp2_description'),
            'ground_type' => Session::get('stp2_ground_type'),
            'status' => Session::get('stp1_status'),
            'location' => $loc,
        ]);
    }
    public function createRentProd($request, $loc)
    {
        return prod::create([
            'landOwner_propertyName' => Session::get('stp1_landOwner_propertyName'),
            'address' => Session::get('stp1_address'),
            'department' => Session::get('stp1_department'),
            'communes' => Session::get('stp1_communes'),
            'borough' => Session::get('stp2_borough'),
            'area' => Session::get('stp1_area'),
            'price' => Session::get('stp2_price', ''),
            'description' => Session::get('stp2_description'),
            'status' => Session::get('stp1_status'),
            'number_of_bedrooms' => Session::get('stp2_number_of_bedrooms'),
            'number_of_bathrooms' => Session::get('stp2_number_of_bathrooms'),
            'location' => $loc,
            'locationType' => Session::get('stp2_locationType'),
        ]);
    }
}