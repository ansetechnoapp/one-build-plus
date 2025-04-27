<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomeSliderImage extends Model
{
    use HasFactory;

    protected $table = 'home_slider_images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'image1',
        'image2',
        'image3',
        'active',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'active' => 'boolean',
    ];

    /**
     * Find a slider image by column and value.
     */
    public static function findByColumn($column, $value)
    {
        return self::where($column, $value)->first();
    }

    /**
     * Update or create a slider image.
     */
    public static function updateOrCreateImage($field, $path)
    {
        return self::updateOrCreate(['id' => 1], [$field => $path]);
    }

    /**
     * Get the active slider images.
     */
    public static function getActive()
    {
        return self::where('active', true)->get();
    }

    /**
     * Get the first slider image.
     */
    public static function getFirst()
    {
        return self::first();
    }

    /**
     * Select a slider image by column and value.
     */
    public function SelectImageslidehome($column, $value)
    {
        return $this->where($column, $value)->first();
    }
}
