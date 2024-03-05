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
        $commune = $this->prod->all();
        $posts = $this->prod->select_location_prod_with_image('oui', 'desc');
        foreach ($posts as $product) {
            $product->img;
        }

        return view('rent.index', ['locationType' => $selectlocationTypetableProdForHome, 'commune' => $selectCommunetableProdForHome, 'allprod' => $posts, 'posts' => $commune]);
    }
    public function selectsearch(Request $request)
    {
        $gT = 'locationType';
        $groundType = $request->locationType;
        $communes = $request->communes;
        $viewPage = 'show_prod_location.index';
        $pMax = $request->price_max;
        $pMin = $request->price_min;
        $selectCommunetableProdForHome = $this->prod->select_Commune_location_table('oui');
        $selectlocationTypetableProdForHome = $this->prod->select_Commune_locationType();
        if ($pMin == null && $pMax == null || $pMin == null && $pMax == '0' || $pMin == '0' && $pMax == null || $pMin == '0' && $pMax == '0') {
            $pMin = '0';
            $pMax = '0';
            if ($communes == null && $groundType !== null) {
                $query = $this->prod->select_distinct_groundType_prod($gT, $groundType);
                return view($viewPage, [$gT => $selectlocationTypetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'posts' => $query]);
            }
            if ($groundType == null && $communes !== null) {
                $query = $this->prod->select_distinct_communes_prod($communes);
                return view($viewPage, [$gT => $selectlocationTypetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'posts' => $query]);
            }

            if ($communes !== null && $groundType !== null) {
                $query = $this->prod->select_distinct_groundType_communes_prod($gT, $groundType, $communes);
                return view($viewPage, [$gT => $selectlocationTypetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'posts' => $query]);
            }
        } else {
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

                if ($pMin > $pMax) {
                    return redirect()->back()->withErrors(['comparePrice' => 'Le prix minimum ne peut pas être supérieur au prix maximum.']);
                } else {
                    if ($pMax == '0' && $pMin !== '0') {
                        $query = $this->prod->select_distinct_groundType_communes_pMax_Egal_0_prod($gT, $groundType, $communes, $pMin);
                        return view($viewPage, [$gT => $selectlocationTypetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'posts' => $query]);
                    }
                    if ($pMin == '0' && $pMax !== '0') {
                        $query = $this->prod->select_distinct_groundType_communes_pMin_Egal_0_prod($gT, $groundType, $communes, $pMax);
                        return view($viewPage, [$gT => $selectlocationTypetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'posts' => $query]);
                    }
                    if ($pMin !== '0' && $pMax !== '0') {
                        $query = $this->prod->select_distinct_groundType_communes_pMin_pMax_dif_0_prod($gT, $groundType, $communes, $pMax, $pMin);
                        return view($viewPage, [$gT => $selectlocationTypetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'posts' => $query]);
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
}
