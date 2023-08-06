<?php

namespace App\Models\prod;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class insert extends Model
{
    use HasFactory;

    protected $table = 'prod';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'land_owner',
        'address',
        'department',
        'communes',
        'borough',
        'area',
        'price',
        'price_min',
        'main_image',
        'imag1',
        'img2',
        'img3',
        'img4',
        'description',
        'ground_type',
    ];

}