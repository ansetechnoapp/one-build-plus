<?php

namespace App\Models\Prod;

use App\Models\Prod;

trait select
{

    public function select_prod($col,$id)
    {
        return Prod::where($col, $id)->first();
        // return Prod::findOrFail($id);
    }
    public function select_prod_with_image()
    {
        return Prod::with('img')->get();
    }
    public function select_Commune_table()
    {
        return prod::distinct()->select('department', $this->cM)->get();
    }
    public function select_Commune_location_table($location)
    {
        return prod::distinct()->select('department', $this->cM)->where('location', $location)->get();
    }
    public function select_locationType()
    {
        return prod::distinct()->select('locationType')->get();
    }
    public function select_Ground_type()
    {
        return prod::distinct()->select($this->gT)->whereNotNull('ground_type')->get();
    }
    public function select_take_location_prod($status,$orderBy,$num)
    {
        return prod::where('location', $status)->orderBy('id', $orderBy)->take($num)->get();
    }
    public function select_take_location_prod_with_image($status,$orderBy,$num)
    {
        return prod::where('location', $status)->with('img')->orderBy('id', $orderBy)->take($num)->get();
    }
    public function select_location_prod_with_image($status,$orderBy)
    {
        return prod::where('location', $status)->with('img')->orderBy('id', $orderBy)->get();
    }
    public function select_location_prod($status,$orderBy)
    {
        return prod::where('location', $status)->orderBy('id', $orderBy)->get();
    }
    public function select_location_paginate_prod($status,$orderBy,$numPage)
    {
        return prod::where('location', $status)->orderBy('id', $orderBy)->paginate(perPage: $numPage);
    }
    public function select_last_prod($num,$orderBy)
    {
        return prod::orderBy('id', $orderBy)->take($num)->get();
    }
    public function select_distinct_groundType_prod($ground_type,$groundType,$location)
    {
        return prod::select('*')
            ->where($ground_type, $groundType)
            ->where('location', $location)
            ->distinct()
            ->get();
    }
    public function select_distinct_communes_prod($communes,$location)
    {
        return prod::select('*')
            ->where($this->cM, $communes)
            ->where('location', $location)
            ->distinct()
            ->get();
    }
    public function select_distinct_groundType_communes_prod($ground_type,$groundType, $communes, $location)
    {
        return prod::select('*')
            ->where($ground_type, $groundType)
            ->where($this->cM, $communes)
            ->where('location', $location)
            ->distinct()
            ->get();
    }
    public function select_distinct_groundType_communes_pMax_Egal_0_prod($ground_type,$groundType, $communes, $pMin, $location)
    {
        return prod::select('*')
            ->where($ground_type, $groundType)
            ->where($this->cM, $communes)
            ->where('location', $location)
            ->wherebetween('price', [$pMin, '0'])
            ->distinct()
            ->get();
    }
    public function select_distinct_groundType_communes_pMin_Egal_0_prod($ground_type,$groundType, $communes, $pMax, $location)
    {
        return prod::select('*')
            ->where($ground_type, $groundType)
            ->where($this->cM, $communes)
            ->where('location', $location)
            ->wherebetween('price', ['0', $pMax])
            ->distinct()
            ->get();
    }
    public function select_distinct_groundType_communes_pMin_pMax_dif_0_prod($ground_type,$groundType, $communes, $pMax, $pMin, $location)
    {
        return prod::select('*')
            ->where($ground_type, $groundType)
            ->where($this->cM, $communes)
            ->where('location', $location)
            ->wherebetween('price', [$pMin, $pMax])
            ->distinct()
            ->get();
    }
}
