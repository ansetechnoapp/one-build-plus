<?php

namespace App\Models;

use App\Models\Prod;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use App\Models\Additional_option\Create;
use App\Models\Additional_option\Select;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Additional_option extends Model
{
    use HasFactory,Select,Create;

    protected $table = 'additional_option';

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
        'prod_id',
    ];

    public function devis()
    {
        return $this->hasMany(devis::class, 'additional_option_id');
    }
    public function user()
    {
        return $this->belongsTo(user::class, 'users_id');
    }
    public function prod()
    {
        return $this->belongsTo(Prod::class, 'prod_id');
    }
    /* public function devis()
    {
        return $this->hasOne(devis::class, 'additional_option_id');
    } */
}


