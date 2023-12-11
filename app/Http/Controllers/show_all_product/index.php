<?php

namespace App\Http\Controllers\show_all_product;

use Illuminate\Http\Request;
use App\Models\prod as crudProd;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class index extends Controller
{
    public function selectsearch(Request $request)
    {


        $rules = [
            'price_max' => 'required|integer',
            'price_min' => 'required|integer',
        ];
        $messages = [
            'price_max' => 'uniquement des nombres,entiers',
            'price_min' => 'uniquement des nombres,entiers',
        ];

        try {
            $request->validate($rules, $messages);
            $groundType = $request->ground_type;
            $communes = $request->communes;
            $priceMax = $request->price_max;
            $priceMin = $request->price_min;

            $selectCommunetableProdForHome = crudProd::distinct()->select('department', 'communes')->get();
            $selectGround_typetableProdForHome = crudProd::distinct()->select('ground_type')->get();
            if ($priceMin > $priceMax) {
                return redirect()->back()->withErrors(['comparePrice' => 'Le prix minimum ne peut pas être supérieur au prix maximum.']);
            } else {
                if ($priceMin == null && $priceMax == null || $priceMin == '0' && $priceMax == '0') {
                    $query = crudProd::select('area', 'communes', 'price', 'address', 'borough')
                        ->where('ground_type', $groundType)
                        ->where('communes', $communes)
                        ->distinct()
                        ->get();
                    return view('show_all_product.index', ['ground_type' => $selectGround_typetableProdForHome, 'commune' => $selectCommunetableProdForHome, 'posts' => $query]);
                }

                if ($priceMax == null || $priceMax == '0') {
                    $query = crudProd::select('area', 'communes', 'price', 'address', 'borough')
                        ->where('ground_type', $groundType)
                        ->where('communes', $communes)
                        ->wherebetween('price', [$priceMin, '0'])
                        ->distinct()
                        ->get();
                    return view('show_all_product.index', ['ground_type' => $selectGround_typetableProdForHome, 'commune' => $selectCommunetableProdForHome, 'posts' => $query]);
                }

                if ($priceMin == null || $priceMin == '0') {
                    $query = crudProd::select('area', 'communes', 'price', 'address', 'borough')
                        ->where('ground_type', $groundType)
                        ->where('communes', $communes)
                        ->wherebetween('price', ['0', $priceMax])
                        ->distinct()
                        ->get();
                    return view('show_all_product.index', ['ground_type' => $selectGround_typetableProdForHome, 'commune' => $selectCommunetableProdForHome, 'posts' => $query]);
                }
                if ($priceMin !== '0' && $priceMax !== '0') {
                    $query = crudProd::select('area', 'communes', 'price', 'address', 'borough')
                        ->where('ground_type', $groundType)
                        ->where('communes', $communes)
                        ->wherebetween('price', [$priceMin, $priceMax])
                        ->distinct()
                        ->get();
                    return view('show_all_product.index', ['ground_type' => $selectGround_typetableProdForHome, 'commune' => $selectCommunetableProdForHome, 'posts' => $query]);
                }
            }
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            return redirect()
                ->back()
                ->withErrors($errors);
        }
    }
}
