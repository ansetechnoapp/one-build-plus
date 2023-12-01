<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class imageslidehome extends Model
{
    use HasFactory;
    protected $table = 'imageslidehome';


    protected $fillable = [
        'img1',
        'img2',
        'img3',
    ];
}
