<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

trait SelectIsh
{

    public function SelectImageslidehome($col,$value)
    {
        return Imageslidehome::where($col, $value)->first();
        // return Imageslidehome::find(1);
    }
}

trait UpdateIsh
{

    public function UpdateImageslidehome($imgField,$imgPath)
    {
        return Imageslidehome::updateOrCreate(['id' => 1], [$imgField => $imgPath]);
    }
}

class Imageslidehome extends Model
{
    use HasFactory,SelectIsh,UpdateIsh;
    protected $table = 'imageslidehome';


    protected $fillable = [
        'img1',
        'img2',
        'img3',
    ];
}
