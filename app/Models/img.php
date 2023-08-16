<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\prod\insert as prod;
class img extends Model
{
    use HasFactory;
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
