<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FaqCategory extends Model
{
    use HasFactory;

    protected $table = 'faq_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
    ];

    /**
     * Get the FAQs for the category.
     */
    public function faqs()
    {
        return $this->hasMany(Faq::class, 'category_id');
    }

    /**
     * Create a new FAQ category from request data.
     */
    public static function createFromRequest($request)
    {
        return self::create([
            'title' => $request->title,
        ]);
    }

    /**
     * Find a FAQ category by column and value.
     */
    public static function findByColumn($column, $value)
    {
        return self::where($column, $value)->first();
    }

    /**
     * Delete a FAQ category by column and value.
     */
    public static function deleteByColumn($column, $value)
    {
        return self::where($column, $value)->delete();
    }

    /**
     * Update a FAQ category from request data.
     */
    public static function updateFromRequest($request)
    {
        $category = self::findByColumn('id', $request->id);
        
        if ($category) {
            $category->update([
                'title' => $request->title,
            ]);
        }
        
        return $category;
    }
}
