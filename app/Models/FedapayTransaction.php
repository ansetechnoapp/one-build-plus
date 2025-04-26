<?php

namespace App\Models;

use App\Models\Quote;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FedapayTransaction extends Model
{
    use HasFactory;

    protected $table = 'fedapay_transactions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'transaction_id',
        'transaction_url',
        'status',
        'quote_id',
        'users_id',
    ];

    /**
     * Get the quote associated with the FedaPay transaction.
     */
    public function quote()
    {
        return $this->belongsTo(Quote::class, 'quote_id');
    }

    /**
     * Get the user associated with the FedaPay transaction.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    /**
     * Create or update a FedaPay transaction.
     */
    public static function createOrUpdate($userId, $transactionId, $url, $quoteId)
    {
        $exists = self::where('quote_id', $quoteId)
                     ->where('users_id', $userId)
                     ->exists();
        
        if (!$exists) {
            $transaction = new self();
            $transaction->transaction_id = $transactionId;
            $transaction->transaction_url = $url;
            $transaction->quote()->associate($quoteId);
            $transaction->user()->associate($userId);
            $transaction->save();
            
            return $transaction;
        } else {
            self::where('quote_id', $quoteId)->delete();
            
            $transaction = new self();
            $transaction->transaction_id = $transactionId;
            $transaction->transaction_url = $url;
            $transaction->quote()->associate($quoteId);
            $transaction->user()->associate($userId);
            $transaction->save();
            
            return $transaction;
        }
    }

    /**
     * Check if a FedaPay transaction exists.
     */
    public static function exists($quoteId, $userId)
    {
        return self::where('quote_id', $quoteId)
                  ->where('users_id', $userId)
                  ->exists();
    }

    /**
     * Delete a FedaPay transaction by quote ID.
     */
    public static function deleteByQuoteId($quoteId)
    {
        return self::where('quote_id', $quoteId)->delete();
    }

    /**
     * Update the status of a FedaPay transaction.
     */
    public static function updateStatus($transactionId, $status)
    {
        return self::where('transaction_id', $transactionId)
                  ->update(['status' => $status]);
    }
}
