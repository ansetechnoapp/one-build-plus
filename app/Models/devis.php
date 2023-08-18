<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
