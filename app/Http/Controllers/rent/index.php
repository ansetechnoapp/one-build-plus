<?php

namespace App\Http\Controllers\rent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class index extends Controller
{
    public function selectsearch(Request $request)
    {
        $gT = 'locationType';
        $locationType = $request->locationType;
        $communes = $request->communes;
        $viewPage = 'show_prod_location.index';
        $pMax = $request->price_max;
        $pMin = $request->price_min;
        $selectCommunetableProdForHome = $this->prod->select_Commune_location_table('oui');
        $selectlocationTypetableProdForHome = $this->prod->select_locationType();
        if ($pMin == null && $pMax == null || $pMin == null && $pMax == '0' || $pMin == '0' && $pMax == null || $pMin == '0' && $pMax == '0') {
            $pMin = '0';
            $pMax = '0';
            if ($communes == null && $locationType !== null) {
                $query = $this->prod->select_distinct_groundType_prod($gT, $locationType,'oui');
                // dd($query,'aa5');
                return view($viewPage, [$gT => $selectlocationTypetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'posts' => $query,'path_manager' => $this->path_manager(0),]);
            }
            if ($locationType == null && $communes !== null) {
                $query = $this->prod->select_distinct_communes_prod($communes,'oui');
                // dd($query,'aa4');
                return view($viewPage, [$gT => $selectlocationTypetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'posts' => $query,'path_manager' => $this->path_manager(0),]);
            }

            if ($communes !== null && $locationType !== null) {
                $query = $this->prod->select_distinct_groundType_communes_prod($gT, $locationType, $communes,'oui');
                // dd($query,'aa3');
                return view($viewPage, [$gT => $selectlocationTypetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'posts' => $query,'path_manager' => $this->path_manager(0),]);
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
                        $query = $this->prod->select_distinct_groundType_communes_pMax_Egal_0_prod($gT, $locationType, $communes, $pMin,'oui');
                        // dd($query,'aa2');
                        return view($viewPage, [$gT => $selectlocationTypetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'posts' => $query,'path_manager' => $this->path_manager(0),]);
                    }
                    if ($pMin == '0' && $pMax !== '0') {
                        $query = $this->prod->select_distinct_groundType_communes_pMin_Egal_0_prod($gT, $locationType, $communes, $pMax,'oui');
                        // dd($query,'aa1');
                        return view($viewPage, [$gT => $selectlocationTypetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'posts' => $query,'path_manager' => $this->path_manager(0),]);
                    }
                    if ($pMin !== '0' && $pMax !== '0') {
                        $query = $this->prod->select_distinct_groundType_communes_pMin_pMax_dif_0_prod($gT, $locationType, $communes, $pMax, $pMin,'oui');
                        // dd($query,'aa');
                        return view($viewPage, [$gT => $selectlocationTypetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'posts' => $query,'path_manager' => $this->path_manager(0),]);
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
    public function showrentallprod()
    {
        // Utilisation du nouveau modèle Product
        $selectCommunetableProdForHome = $this->product->where('location', 'oui')->distinct()->select('department', 'communes')->get();
        $selectlocationTypetableProdForHome = $this->product->distinct()->select('locationType')->get();
        $commune = $this->product->all();
        $posts = $this->product->with('image')->where('location', 'oui')->orderBy('id', 'desc')->get();

        return view('rent.index', [
            'locationType' => $selectlocationTypetableProdForHome,
            'communes' => $selectCommunetableProdForHome,
            'allprod' => $posts,
            'posts' => $commune,
            'path_manager' => $this->path_manager(0),
        ]);
    }
}
