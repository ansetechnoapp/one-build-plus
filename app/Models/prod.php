<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\img;

class prod extends Model
{
    use HasFactory;

    protected $table = 'prod';

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
