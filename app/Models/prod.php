<?php

namespace App\Models;

use App\Models\img;
use App\Models\Prod\Create;
use App\Models\Prod\Select;
use App\Models\Prod\Update;
use App\Models\additional_option;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prod extends Model
{
    use HasFactory,Select,Create,Update;

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
