<?php

namespace App\Models;

use App\Models\Imageslidehome\Select;
use App\Models\Imageslidehome\Update;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Imageslidehome extends Model
{
    use HasFactory,Select,Update;
    protected $table = 'imageslidehome';


    protected $fillable = [
        'img1',
        'img2',
        'img3',
    ];
}
