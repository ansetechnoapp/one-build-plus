<?php

namespace App\Http\Controllers\show_all_product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class index extends Controller
{
    public function selectsearch(Request $request)
    {
        $gT = 'ground_type';
        $groundType = $request->ground_type;
        $communes = $request->communes;
        $pMax = $request->price_max;
        $pMin = $request->price_min;
        $viewPage = 'show_all_product.index';

        if ($pMin == null && $pMax == null || $pMin == null && $pMax == '0' || $pMin == '0' && $pMax == null || $pMin == '0' && $pMax == '0') {
            $pMin = '0';
            $pMax = '0';
            if ($groundType == null && $communes == null) {
                $query = $this->prod->all();
                return view($viewPage, ['posts' => $query, 'path_manager' => $this->path_manager(0),]);
            } else {
                if ($communes == null && $groundType !== null) {
                    $query = $this->prod->select_distinct_groundType_prod($gT, $groundType, 'non');
                    return view($viewPage, ['posts' => $query, 'path_manager' => $this->path_manager(0),]);
                }
                if ($groundType == null && $communes !== null) {
                    $query = $this->prod->select_distinct_communes_prod($communes, 'non');
                    return view($viewPage, [ 'posts' => $query, 'path_manager' => $this->path_manager(0),]);
                }

                if ($communes !== null && $groundType !== null) {
                    $query = $this->prod->select_distinct_groundType_communes_prod($gT, $groundType, $communes, 'non');
                    return view($viewPage, [ 'posts' => $query, 'path_manager' => $this->path_manager(0),]);
                }
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
                        $query = $this->prod->select_distinct_groundType_communes_pMax_Egal_0_prod($gT, $groundType, $communes, $pMin, 'non');
                        return view($viewPage, [ 'posts' => $query, 'path_manager' => $this->path_manager(0),]);
                    }
                    if ($pMin == '0' && $pMax !== '0') {
                        $query = $this->prod->select_distinct_groundType_communes_pMin_Egal_0_prod($gT, $groundType, $communes, $pMax, 'non');
                        return view($viewPage, [ 'posts' => $query, 'path_manager' => $this->path_manager(0),]);
                    }
                    if ($pMin !== '0' && $pMax !== '0') {
                        $query = $this->prod->select_distinct_groundType_communes_pMin_pMax_dif_0_prod($gT, $groundType, $communes, $pMax, $pMin, 'non');
                        return view($viewPage, [ 'posts' => $query, 'path_manager' => $this->path_manager(0),]);
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
    public function show()
    {
        // Utilisation du nouveau modèle Product
        $posts = $this->product->all();
        return view('show_all_product.index', ['posts' => $posts, 'path_manager' => $this->path_manager(0),]);
    }
}
