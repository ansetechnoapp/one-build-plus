<?php

namespace App\Models;

use App\Models\Product;
use App\Models\User;
use App\Models\AdditionalOption;
use App\Models\FedapayTransaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quote extends Model
{
    use HasFactory;

    protected $table = 'quotes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'price',
        'montant',
        'quote_date',
        'expiration_date',
        'product_id',
        'additional_option_id',
        'users_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'price' => 'decimal:2',
        'montant' => 'decimal:2',
        'quote_date' => 'date',
        'expiration_date' => 'date',
    ];

    /**
     * Get the user that owns the quote.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    /**
     * Get the additional option associated with the quote.
     */
    public function additionalOption()
    {
        return $this->belongsTo(AdditionalOption::class, 'additional_option_id');
    }

    /**
     * Get the product associated with the quote.
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    /**
     * Get the FedaPay transaction associated with the quote.
     */
    public function fedapayTransaction()
    {
        return $this->hasOne(FedapayTransaction::class, 'quote_id');
    }

    /**
     * Create a new quote from request data.
     */
    public static function createFromRequest($request, $productId, $additionalOption)
    {
        $quote = new self();
        $quote->price = $request->price;
        $quote->montant = $request->montant;
        $quote->product_id = $productId;
        $quote->users_id = $request->user_id;
        $quote->quote_date = now()->format('Y-m-d');
        $quote->expiration_date = now()->addDays(7)->format('Y-m-d');
        $quote->additionalOption()->associate($additionalOption);
        $quote->save();

        return $quote;
    }

    /**
     * Create a new quote from request data (alternative method).
     */
    public static function createFromRequest2($request, $user, $additionalOption)
    {
        $quote = new self();
        $quote->price = $request->price;
        $quote->montant = $request->montant;
        $quote->product_id = $request->id;
        $quote->quote_date = now()->format('Y-m-d');
        $quote->expiration_date = now()->addDays(7)->format('Y-m-d');
        $quote->user()->associate($user);
        $quote->additionalOption()->associate($additionalOption);
        $quote->save();

        return $quote;
    }

    /**
     * Find a quote by product ID and user ID.
     */
    public static function findByProductAndUser($productId, $userId)
    {
        return self::where('product_id', $productId)
                  ->where('users_id', $userId)
                  ->first();
    }

    /**
     * Find all quotes for a user with related data.
     */
    public static function findAllForUserWithRelations($userId)
    {
        return self::with(['product', 'additionalOption', 'user', 'fedapayTransaction'])
                  ->where('users_id', $userId)
                  ->get();
    }

    /**
     * Find all quotes with related data.
     */
    public static function findAllWithRelations()
    {
        return self::with(['product', 'additionalOption', 'user', 'fedapayTransaction'])
                  ->get();
    }

    /**
     * Find a quote by ID or throw an exception.
     */
    public static function findOrFail($id)
    {
        return self::with(['product', 'additionalOption', 'user', 'fedapayTransaction'])
                  ->findOrFail($id);
    }
}
