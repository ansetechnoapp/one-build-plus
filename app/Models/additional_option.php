<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class additional_option extends Model
{
    use HasFactory;

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
        return $this->belongsTo(User::class, 'users_id');
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


