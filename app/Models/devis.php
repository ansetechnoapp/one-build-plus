<?php

namespace App\Models;

/* use App\Models\User;
use App\Models\prod; */
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class devis extends Model
{
    use HasFactory;
    protected $table = 'devis';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'montant',
        'dateDevis',
        'dateExpiration',
        'prod_id',
        'additional_option_id',
        'users_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    public function additional_option()
    {
        return $this->belongsTo(User::class, 'additional_option_id');
    }
    public function prod()
    {
        return $this->belongsTo(prod::class, 'prod_id');
    }
    public function fedapay()
    {
        return $this->hasOne(fedapay::class, 'devis_id');
    }
}