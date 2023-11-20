<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fedapay extends Model
{
    use HasFactory;
    protected $table = 'fedapay';


    protected $fillable = [
        'fedapayTransactionId',
        'fedapayTransactionUrl',
        'devis_id',
    ];
    public function devis()
    {
        return $this->belongsTo(devis::class, 'devis_id');
    }
}
