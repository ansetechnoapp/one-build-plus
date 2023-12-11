<?php

namespace App\Http\Controllers\rent;

use App\Models\img;
use App\Models\prod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class index extends Controller
{


    public function showrentallprod()
    {
        $selectCommunetableProdForHome = prod::distinct()->select('department', 'communes')->where('location', 'oui')->get();
        $selectlocationTypetableProdForHome = prod::distinct()->select('locationType')->get();
        $commune = prod::all();
        $posts = prod::where('location', 'oui')->with('img')->orderBy('id', 'desc')->get();
        foreach ($posts as $product) {
            $product->img;
        }

        return view('rent.index', ['locationType' => $selectlocationTypetableProdForHome, 'commune' => $selectCommunetableProdForHome, 'allprod' => $posts, 'posts' => $commune]);
    }
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
            $groundType = $request->locationType;
            $communes = $request->communes;
            $priceMax = $request->price_max;
            $priceMin = $request->price_min;
            $selectCommunetableProdForHome = prod::distinct()->select('department', 'communes')->where('location', 'oui')->get();
            $selectlocationTypetableProdForHome = prod::distinct()->select('locationType')->get();
            if ($priceMin > $priceMax) {
                return redirect()->back()->withErrors(['comparePrice' => 'Le prix minimum ne peut pas être supérieur au prix maximum.']);
            } else {
                if ($priceMin == null && $priceMax == null || $priceMin == '0' && $priceMax == '0') {
                    $query = prod::select('area', 'communes', 'price', 'address', 'borough')
                        ->where('locationType', $groundType)
                        ->where('communes', $communes)
                        ->distinct()
                        ->get();
                    return view('show_prod_location.index', ['locationType' => $selectlocationTypetableProdForHome, 'commune' => $selectCommunetableProdForHome, 'posts' => $query]);
                }

                if ($priceMax == null || $priceMax == '0') {
                    $query = prod::select('area', 'communes', 'price', 'address', 'borough')
                        ->where('locationType', $groundType)
                        ->where('communes', $communes)
                        ->wherebetween('price', [$priceMin, '0'])
                        ->distinct()
                        ->get();
                    return view('show_prod_location.index', ['locationType' => $selectlocationTypetableProdForHome, 'commune' => $selectCommunetableProdForHome, 'posts' => $query]);
                }

                if ($priceMin == null || $priceMin == '0') {
                    $query = prod::select('area', 'communes', 'price', 'address', 'borough')
                        ->where('locationType', $groundType)
                        ->where('communes', $communes)
                        ->wherebetween('price', ['0', $priceMax])
                        ->distinct()
                        ->get();
                    return view('show_prod_location.index', ['locationType' => $selectlocationTypetableProdForHome, 'commune' => $selectCommunetableProdForHome, 'posts' => $query]);
                }
                if ($priceMin !== '0' && $priceMax !== '0') {
                    $query = prod::select('area', 'communes', 'price', 'address', 'borough')
                        ->where('locationType', $groundType)
                        ->where('communes', $communes)
                        ->wherebetween('price', [$priceMin, $priceMax])
                        ->distinct()
                        ->get();
                    return view('show_prod_location.index', ['locationType' => $selectlocationTypetableProdForHome, 'commune' => $selectCommunetableProdForHome, 'posts' => $query]);
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
