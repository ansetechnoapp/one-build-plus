<?php

namespace App\Models;

use App\Models\Image;
use App\Models\AdditionalOption;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $groundTypeColumn = 'ground_type';
    protected $communesColumn = 'communes';

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

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'price' => 'decimal:2',
        'price_min' => 'decimal:2',
        'number_of_bedrooms' => 'integer',
        'number_of_bathrooms' => 'integer',
    ];

    /**
     * Get the image associated with the product.
     */
    public function image()
    {
        return $this->hasOne(Image::class, 'product_id');
    }

    /**
     * Get the additional option associated with the product.
     */
    public function additionalOption()
    {
        return $this->hasOne(AdditionalOption::class, 'product_id');
    }

    /**
     * Get the quotes for the product.
     */
    public function quotes()
    {
        return $this->hasMany(Quote::class, 'product_id');
    }

    /**
     * Create a new product from request data.
     */
    public static function createFromRequest($request, $location, $sessionData)
    {
        return self::create([
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
            'location' => $location,
            'number_of_bedrooms' => $sessionData['number_of_bedrooms'] ?? '0',
            'number_of_bathrooms' => $sessionData['number_of_bathrooms'] ?? '0',
            'locationType' => $sessionData['locationType'] ?? '',
        ]);
    }

    /**
     * Find a product by column and value.
     */
    public static function findByColumn($column, $value)
    {
        return self::where($column, $value)->first();
    }

    /**
     * Get all products with their images.
     */
    public static function getAllWithImages()
    {
        return self::with('image')->get();
    }

    /**
     * Get distinct communes and departments.
     */
    public static function getDistinctCommunes()
    {
        return self::distinct()->select('department', 'communes')->get();
    }

    /**
     * Get distinct communes and departments by location.
     */
    public static function getDistinctCommunesByLocation($location)
    {
        return self::distinct()->select('department', 'communes')->where('location', $location)->get();
    }

    /**
     * Get distinct location types.
     */
    public static function getDistinctLocationTypes()
    {
        return self::distinct()->select('locationType')->get();
    }

    /**
     * Get distinct ground types.
     */
    public static function getDistinctGroundTypes()
    {
        return self::distinct()->select('ground_type')->whereNotNull('ground_type')->get();
    }

    /**
     * Get products by location with pagination.
     */
    public static function getByLocationPaginated($location, $orderBy = 'desc', $perPage = 10)
    {
        return self::where('location', $location)->orderBy('id', $orderBy)->paginate($perPage);
    }

    /**
     * Update product data by step.
     */
    public function updateByStep($requestData)
    {
        if ($requestData['step'] == '1') {
            return $this->update([
                'landOwner_propertyName' => $requestData['landOwner_propertyName'],
                'address' => $requestData['address'],
                'department' => $requestData['department'],
                'communes' => $requestData['communes'],
                'area' => $requestData['area'],
                'status' => $requestData['status'],
                'location' => $requestData['location'],
            ]);
        } elseif ($requestData['step'] == '2') {
            return $this->update([
                'borough' => $requestData['borough'] ?? '',
                'price' => $requestData['price'] ?? '',
                'price_min' => $requestData['price_min'] ?? '0',
                'description' => $requestData['description'] ?? '',
                'ground_type' => $requestData['ground_type'] ?? '',
                'number_of_bedrooms' => $requestData['number_of_bedrooms'] ?? '0',
                'number_of_bathrooms' => $requestData['number_of_bathrooms'] ?? '0',
                'locationType' => $requestData['locationType'] ?? '',
            ]);
        }

        return false;
    }

    /**
     * Get products by location with images.
     */
    public function select_location_prod_with_image($location, $orderBy)
    {
        return $this->where('location', $location)->with('image')->orderBy('id', $orderBy)->get();
    }

    /**
     * Get products by location.
     */
    public function select_location_prod($location, $orderBy)
    {
        return $this->where('location', $location)->orderBy('id', $orderBy)->get();
    }

    /**
     * Get a limited number of products by location.
     */
    public function select_take_location_prod($location, $orderBy, $limit)
    {
        return $this->where('location', $location)->orderBy('id', $orderBy)->take($limit)->get();
    }

    /**
     * Get a limited number of products by location with images.
     */
    public function select_take_location_prod_with_image($location, $orderBy, $limit)
    {
        return $this->where('location', $location)->with('image')->orderBy('id', $orderBy)->take($limit)->get();
    }

    /**
     * Get the last products.
     */
    public function select_last_prod($limit, $orderBy)
    {
        return $this->orderBy('id', $orderBy)->take($limit)->get();
    }

    /**
     * Find a product by column and value.
     */
    public function select_prod($column, $value)
    {
        return $this->where($column, $value)->first();
    }

    /**
     * Get all products with images.
     */
    public function select_prod_with_image()
    {
        return $this->with('image')->get();
    }
}
