<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq extends Model
{
    use HasFactory;

    protected $table = 'faqs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'question',
        'answer',
        'category_id',
    ];

    /**
     * Get the category that owns the FAQ.
     */
    public function category()
    {
        return $this->belongsTo(FaqCategory::class, 'category_id');
    }

    /**
     * Create a new FAQ from request data.
     */
    public static function createFromRequest($request)
    {
        return self::create([
            'category_id' => $request->category_id,
            'question' => $request->question,
            'answer' => $request->answer,
        ]);
    }

    /**
     * Find FAQs by category ID.
     */
    public static function findByCategory($categoryId)
    {
        return self::where('category_id', $categoryId)->get();
    }

    /**
     * Find a FAQ by column and value.
     */
    public static function findByColumn($column, $value)
    {
        return self::where($column, $value)->first();
    }

    /**
     * Get a collection of FAQs by column and value.
     */
    public static function getCollectionByColumn($column, $value)
    {
        return self::where($column, $value)->get();
    }

    /**
     * Delete a FAQ by column and value.
     */
    public static function deleteByColumn($column, $value)
    {
        return self::where($column, $value)->delete();
    }

    /**
     * Update a FAQ from request data.
     */
    public static function updateFromRequest($request)
    {
        $faq = self::findByColumn('id', $request->id);
        
        if ($faq) {
            $faq->update([
                'category_id' => $request->category_id,
                'question' => $request->question,
                'answer' => $request->answer,
            ]);
        }
        
        return $faq;
    }
}
