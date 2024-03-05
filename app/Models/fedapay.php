<?php

namespace App\Models;

use App\Models\Fedapay\Create;
use App\Models\Fedapay\Delete;
use App\Models\Fedapay\Select;
use App\Models\Fedapay\Update;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fedapay extends Model
{
    use HasFactory,Select,Delete,Create,Update;
    protected $table = 'fedapay';


    protected $fillable = [
        'fedapayTransactionId',
        'fedapayTransactionUrl',
        'devis_id',
        'users_id',
    ];
    public function devis()
    {
        return $this->belongsTo(devis::class, 'devis_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
