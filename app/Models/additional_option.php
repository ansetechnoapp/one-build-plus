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
        'email_users',
    ];
}
