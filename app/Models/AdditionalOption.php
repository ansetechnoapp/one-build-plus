<?php

namespace App\Models;

use App\Models\Product;
use App\Models\User;
use App\Models\Quote;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdditionalOption extends Model
{
    use HasFactory;

    protected $table = 'additional_options';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'registration_andf',
        'formality_fees',
        'notary_fees',
        'payment_frequency',
        'users_id',
        'product_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'registration_andf' => 'decimal:2',
        'formality_fees' => 'decimal:2',
        'notary_fees' => 'decimal:2',
    ];

    /**
     * Get the quotes associated with the additional option.
     */
    public function quotes()
    {
        return $this->hasMany(Quote::class, 'additional_option_id');
    }

    /**
     * Get the user that owns the additional option.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    /**
     * Get the product that owns the additional option.
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    /**
     * Create a new additional option from request data.
     */
    public static function createFromRequest($request, $user)
    {
        $additionalOption = new self();
        $additionalOption->registration_andf = $request->registration_andf;
        $additionalOption->formality_fees = $request->formality_fees;
        $additionalOption->notary_fees = $request->notary_fees;
        $additionalOption->payment_frequency = Session::get('payment_frequency');
        $additionalOption->product_id = $request->id;
        $additionalOption->user()->associate($user);
        $additionalOption->save();

        return $additionalOption;
    }

    /**
     * Create a new additional option from request data (alternative method).
     */
    public static function createFromRequest2($request, $productId)
    {
        return self::create([
            'registration_andf' => $request->registration_andf,
            'formality_fees' => $request->formality_fees,
            'notary_fees' => $request->notary_fees,
            'payment_frequency' => $request->payment_frequency,
            'product_id' => $productId,
            'users_id' => $request->user_id,
        ]);
    }

    /**
     * Find an additional option by product ID and user ID.
     */
    public static function findByProductAndUser($productId, $userId)
    {
        return self::where('product_id', $productId)
                  ->where('users_id', $userId)
                  ->first();
    }
}
