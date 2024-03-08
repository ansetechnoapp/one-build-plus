<?php

namespace App\Http\Controllers\show_all_product;

use Illuminate\Http\Request;
use App\Models\Prod;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class index extends Controller
{
    public function selectsearch(Request $request)
    {
        $gT ='ground_type';
        $groundType = $request->ground_type;
        $communes = $request->communes;
        $pMax = $request->price_max;
        $pMin = $request->price_min;
        $viewPage = 'show_all_product.index';
        $selectCommunetableProdForHome = $this->prod->select_Commune_table();
        $selectGround_typetableProdForHome = $this->prod->select_Ground_type();

        if ($pMin == null && $pMax == null || $pMin == null && $pMax == '0' || $pMin == '0' && $pMax == null || $pMin == '0' && $pMax == '0') {
            $pMin = '0';
            $pMax = '0';
            if($communes == null && $groundType !== null){
                $query = $this->prod->select_distinct_groundType_prod($gT,$groundType);
            return view($viewPage, [$gT => $selectGround_typetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'posts' => $query]);
            }
            if($groundType == null && $communes !== null){
                $query = $this->prod->select_distinct_communes_prod($communes);
            return view($viewPage, [$gT => $selectGround_typetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'posts' => $query]);
            }

            if($communes !== null && $groundType !== null){
                $query = $this->prod->select_distinct_groundType_communes_prod($gT,$groundType,$communes);
            return view($viewPage, [$gT => $selectGround_typetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'posts' => $query]);
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
                        $query = $this->prod->select_distinct_groundType_communes_pMax_Egal_0_prod($gT,$groundType, $communes,$pMin);
                        return view($viewPage, [$gT => $selectGround_typetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'posts' => $query]);
                    }
                    if ($pMin == '0' && $pMax !== '0') {
                        $query = $this->prod->select_distinct_groundType_communes_pMin_Egal_0_prod($gT,$groundType,$communes,$pMax);
                        return view($viewPage, [$gT => $selectGround_typetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'posts' => $query]);
                    }
                    if ($pMin !== '0' && $pMax !== '0') {
                        $query = $this->prod->select_distinct_groundType_communes_pMin_pMax_dif_0_prod($gT,$groundType,$communes,$pMax,$pMin);
                        return view($viewPage, [$gT => $selectGround_typetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'posts' => $query]);
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
    public function selectsearch2(Request $request)
    {
        
        $headers = [
            '<th width="29">id</th>', '<th>propriétaire</th>', '<th>addresse</th>', '<th>département</th>', '<th>commune</th>', '<th>arrondissement</th>',
            '<th width="85">superficie</th>', '<th width="70">prix</th>', '<th width="90">prix promo</th>',
            '<th width="85">type de terre</th>', '<th>Description</th>', '<th width="65">action</th>'
        ];
        $gT ='ground_type';
        $groundType = $request->ground_type;
        $communes = $request->communes;
        $pMax = $request->price_max;
        $pMin = $request->price_min;
        $viewPage = 'dashboard.admin.list_prod.search_list';
        $selectCommunetableProdForHome = $this->prod->select_Commune_table();
        $selectGround_typetableProdForHome = $this->prod->select_Ground_type();

        if ($pMin == null && $pMax == null || $pMin == null && $pMax == '0' || $pMin == '0' && $pMax == null || $pMin == '0' && $pMax == '0') {
            $pMin = '0';
            $pMax = '0';
            if($communes == null && $groundType !== null){
                $query = $this->prod->select_distinct_groundType_prod($gT,$groundType);
            return view($viewPage, [$gT => $selectGround_typetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'allprod' => $query,'header' => $headers,
                'sub_path_admin'=>$this->sub_path_admin(),]);
            }
            if($groundType == null && $communes !== null){
                $query = $this->prod->select_distinct_communes_prod($communes);
            return view($viewPage, [$gT => $selectGround_typetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'allprod' => $query,'header' => $headers,
                'sub_path_admin'=>$this->sub_path_admin(),]);
            }

            if($communes !== null && $groundType !== null){
                $query = $this->prod->select_distinct_groundType_communes_prod($gT,$groundType,$communes);
            return view($viewPage, [$gT => $selectGround_typetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'allprod' => $query,'header' => $headers,
                'sub_path_admin'=>$this->sub_path_admin(),]);
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
                        $query = $this->prod->select_distinct_groundType_communes_pMax_Egal_0_prod($gT,$groundType, $communes,$pMin);
                        return view($viewPage, [$gT => $selectGround_typetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'allprod' => $query,'header' => $headers,
                'sub_path_admin'=>$this->sub_path_admin(),]);
                    }
                    if ($pMin == '0' && $pMax !== '0') {
                        $query = $this->prod->select_distinct_groundType_communes_pMin_Egal_0_prod($gT,$groundType,$communes,$pMax);
                        return view($viewPage, [$gT => $selectGround_typetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'allprod' => $query,'header' => $headers,
                'sub_path_admin'=>$this->sub_path_admin(),]);
                    }
                    if ($pMin !== '0' && $pMax !== '0') {
                        $query = $this->prod->select_distinct_groundType_communes_pMin_pMax_dif_0_prod($gT,$groundType,$communes,$pMax,$pMin);
                        return view($viewPage, [$gT => $selectGround_typetableProdForHome, $this->cM => $selectCommunetableProdForHome, 'allprod' => $query,'header' => $headers,
                'sub_path_admin'=>$this->sub_path_admin(),]);
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
