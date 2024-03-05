<?php

namespace App\Models;

use App\Models\Prod;
use App\Models\Img\Create;
use App\Models\Img\Select;
use App\Models\Img\Update;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Img extends Model
{
    use HasFactory,Select,Create,Update;
    protected $table = 'img';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'main_image',
        'img1',
        'img2',
        'img3',
        'img4',
        'prod_id',
    ];
    public function prod()
    {
        return $this->belongsTo(Prod::class, 'prod_id');
    }
}
