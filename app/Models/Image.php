<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'main_image',
        'img1',
        'img2',
        'img3',
        'img4',
        'product_id',
    ];

    /**
     * Get the product that owns the image.
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    /**
     * Create a new image from request data.
     */
    public static function createFromRequest($request, $product)
    {
        $image = new self();
        $filename = time() . '.' . $request->main_image->extension();
        $path = $request->file('main_image')->storeAs(
            'imageprod',
            $filename,
            'public'
        );
        $image->main_image = $path;
        $image->img1 = null;
        $image->img2 = null;
        $image->img3 = null;
        $image->img4 = null;
        $image->product()->associate($product);
        $image->save();
        
        for ($i = 1; $i <= 4; $i++) {
            $imgField = 'img' . $i;
            if ($request->hasFile($imgField)) {
                $imgFilename = time() . '_img' . $i . '.' . $request->$imgField->extension();
                $imgPath = $request->file($imgField)->storeAs(
                    'imageprod',
                    $imgFilename,
                    'public'
                );

                $image->$imgField = $imgPath;
                $image->save();
            }
        }

        return $image;
    }

    /**
     * Get images by product ID.
     */
    public static function getByProductId($productId)
    {
        return self::where('product_id', $productId)->get();
    }

    /**
     * Update image field by product ID.
     */
    public static function updateFieldByProductId($productId, $field, $value)
    {
        return self::where('product_id', $productId)
                  ->update([$field => $value]);
    }

    /**
     * Update all image fields from request.
     */
    public static function updateAllFromRequest($request)
    {
        if ($request->hasFile('main_image')) {
            $filename = time() . '.' . $request->main_image->extension();
            $path = $request->file('main_image')->storeAs(
                'imageprod',
                $filename,
                'public'
            );
            self::updateFieldByProductId($request->product_id, 'main_image', $path);
        }
        
        for ($i = 1; $i <= 4; $i++) {
            $imgField = 'img' . $i;
            if ($request->hasFile($imgField)) {
                $imgFilename = time() . '_img' . $i . '.' . $request->$imgField->extension();
                $imgPath = $request->file($imgField)->storeAs(
                    'imageprod',
                    $imgFilename,
                    'public'
                );
                self::updateFieldByProductId($request->product_id, $imgField, $imgPath);
            }
        }
    }
}
