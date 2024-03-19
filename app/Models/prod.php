<?php

namespace App\Models;

use App\Models\img;
use App\Models\additional_option;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Factories\HasFactory;

trait CreateProd
{

    public function createProd($request, $loc, $sessionData)
    {
        return Prod::create([
            'landOwner_propertyName' => $sessionData['landOwner_propertyName'] ?? '',
            'address' => $sessionData['address'] ?? '',
            'department' => $sessionData['department'] ?? '',
            'communes' => $sessionData['communes'],
            'borough' => $sessionData['borough'] ?? '',
            'area' =>  $sessionData['area'] ?? '',
            'price' => $sessionData['price'] ?? '0',
            'price_min' => $sessionData['price_min'] ?? '0',
            'description' => $sessionData['description'] ?? '',
            'ground_type' => $sessionData['ground_type'] ?? '',
            'status' => $sessionData['status'] ?? '',
            'location' => $loc,
            'number_of_bedrooms' => $sessionData['number_of_bedrooms'] ?? '0',
            'number_of_bathrooms' => $sessionData['number_of_bathrooms'] ?? '0',
            'locationType' => $sessionData['locationType'] ?? '',
        ]);
    }
}
trait selectProd
{

    public function select_prod($col, $id)
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
    public function select_take_location_prod($status, $orderBy, $num)
    {
        return prod::where('location', $status)->orderBy('id', $orderBy)->take($num)->get();
    }
    public function select_take_location_prod_with_image($status, $orderBy, $num)
    {
        return prod::where('location', $status)->with('img')->orderBy('id', $orderBy)->take($num)->get();
    }
    public function select_location_prod_with_image($status, $orderBy)
    {
        return prod::where('location', $status)->with('img')->orderBy('id', $orderBy)->get();
    }
    public function select_location_prod($status, $orderBy)
    {
        return prod::where('location', $status)->orderBy('id', $orderBy)->get();
    }
    public function select_location_paginate_prod($status, $orderBy, $numPage)
    {
        return prod::where('location', $status)->orderBy('id', $orderBy)->paginate(perPage: $numPage);
    }
    public function select_last_prod($num, $orderBy)
    {
        return prod::orderBy('id', $orderBy)->take($num)->get();
    }
    public function select_distinct_groundType_prod($ground_type, $groundType, $location)
    {
        return prod::select('*')
            ->where($ground_type, $groundType)
            ->where('location', $location)
            ->with('img')
            ->distinct()
            ->get();
    }
    public function select_distinct_communes_prod($communes, $location)
    {
        return prod::select('*')
            ->where($this->cM, $communes)
            ->where('location', $location)
            ->with('img')
            ->distinct()
            ->get();
    }
    public function select_distinct_groundType_communes_prod($ground_type, $groundType, $communes, $location)
    {
        return prod::select('*')
            ->where($ground_type, $groundType)
            ->where($this->cM, $communes)
            ->where('location', $location)
            ->with('img')
            ->distinct()
            ->get();
    }
    public function select_distinct_groundType_communes_pMax_Egal_0_prod($ground_type, $groundType, $communes, $pMin, $location)
    {
        return prod::select('*')
            ->where($ground_type, $groundType)
            ->where($this->cM, $communes)
            ->where('location', $location)
            ->wherebetween('price', [$pMin, '0'])
            ->with('img')
            ->distinct()
            ->get();
    }
    public function select_distinct_groundType_communes_pMin_Egal_0_prod($ground_type, $groundType, $communes, $pMax, $location)
    {
        return prod::select('*')
            ->where($ground_type, $groundType)
            ->where($this->cM, $communes)
            ->where('location', $location)
            ->wherebetween('price', ['0', $pMax])
            ->with('img')
            ->distinct()
            ->get();
    }
    public function select_distinct_groundType_communes_pMin_pMax_dif_0_prod($ground_type, $groundType, $communes, $pMax, $pMin, $location)
    {
        return prod::select('*')
            ->where($ground_type, $groundType)
            ->where($this->cM, $communes)
            ->where('location', $location)
            ->wherebetween('price', [$pMin, $pMax])
            ->with('img')
            ->distinct()
            ->get();
    }
}
trait UpdateProd
{
    public function Update_table_prod_step($requestData)
    {
        $product = $this->select_prod('id', $requestData['prod_id']);
        if ($requestData['step'] == '1') {
            return $product->update([
                'landOwner_propertyName' => $requestData['landOwner_propertyName'],
                'address' => $requestData['address'],
                'department' => $requestData['department'],
                'communes' => $requestData['communes'],
                'area' => $requestData['area'],
                'status' => $requestData['status'],
                'location' => $requestData['location'],
            ]);
        } elseif ($requestData['step'] == '2') {
            return $product->update([
                'borough' => $requestData['borough'] ?? '',
                'price' => $requestData['price'] ?? '',
                'price_min' => $requestData['price_min'] ?? '0',
                'description' => $requestData['description'] ?? '',
                'ground_type' => $requestData['ground_type'] ?? '',
                'number_of_bedrooms' => $requestData['number_of_bedrooms'] ?? '0',
                'number_of_bathrooms' => $requestData['number_of_bathrooms'] ?? '0',
                'locationType' => $requestData['locationType'] ?? '',
            ]);
        } else {
            return [];
        }
    }
}
class Prod extends Model
{
    use HasFactory, CreateProd, SelectProd, UpdateProd;

    protected $table = 'prod';
    protected $gT = 'ground_type';
    protected $cM = 'communes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'landOwner_propertyName',
        'address',
        'department',
        'communes',
        'borough',
        'area',
        'price',
        'price_min',
        'description',
        'ground_type',
        'status',
        'number_of_bedrooms',
        'number_of_bathrooms',
        'location',
        'locationType'
    ];
    public function img()
    {
        return $this->hasOne(Img::class, 'prod_id');
    }
    public function additional_option()
    {
        return $this->hasOne(additional_option::class, 'prod_id');
    }
}
