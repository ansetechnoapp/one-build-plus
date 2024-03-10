<?php

namespace App\Models;

use App\Models\img;
use App\Models\additional_option;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Factories\HasFactory;

trait CreateProd
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
trait selectProd
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
            ->with('img')
            ->distinct()
            ->get();
    }
    public function select_distinct_communes_prod($communes,$location)
    {
        return prod::select('*')
            ->where($this->cM, $communes)
            ->where('location', $location)
            ->with('img')
            ->distinct()
            ->get();
    }
    public function select_distinct_groundType_communes_prod($ground_type,$groundType, $communes, $location)
    {
        return prod::select('*')
            ->where($ground_type, $groundType)
            ->where($this->cM, $communes)
            ->where('location', $location)
            ->with('img')
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
            ->with('img')
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
            ->with('img')
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
            ->with('img')
            ->distinct()
            ->get();
    }
}
trait UpdateProd
{
    public function Update_table_prod_step1($request, $loc)
    {
        $product = $this->select_prod('id', $request->prod_id);
        return $product->update([
            'landOwner_propertyName' => $request->landOwner_propertyName,
            'address' => $request->address,
            'department' => $request->department,
            'communes' => $request->communes,
            'area' => $request->area,
            'status' => $request->status,
            'location' => $loc,
        ]);
    }
    public function Update_table_prod_step2($request, $price, $price_min, $type, $value_type, $type1, $value_type1, $type2, $value_type2)
    {
        $product = $this->select_prod('id', $request->prod_id);
        return $product->update([
            'borough' => $request->borough,
            'price' => $price,
            'price_min' => $price_min,
            'description' => $request->description,
            $type => $value_type,
            $type1 => $value_type1,
            $type2 => $value_type2,
        ]);
    }
}
class Prod extends Model
{
    use HasFactory,CreateProd,SelectProd,UpdateProd;

    protected $table = 'prod';
    protected $gT = 'ground_type';
    protected $cM = 'communes';
    // public function __construct(private $gT = 'ground_type', private $cM = 'communes')
    // {
    //     $this->$gT = $gT;
    //     $this->$cM = $cM; 
    // }

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
