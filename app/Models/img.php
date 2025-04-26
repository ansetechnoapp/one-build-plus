<?php

namespace App\Models;

use App\Models\Prod;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

trait CreateImg
{

    public function createImg($request, $insert)
    {
        $img = new Img();
        $filename = time() . '.' . $request->main_image->extension();
        $path = $request->file('main_image')->storeAs(
            'imageprod',
            $filename,
            'public'
        );
        $img->main_image = $path;
        $img->img1 = null;
        $img->img2 = null;
        $img->img3 = null;
        $img->img4 = null;
        $img->prod()->associate($insert);
        $img->save();
        for ($i = 1; $i <= 4; $i++) {
            $imgField = 'img' . $i;
            if ($request->hasFile($imgField)) {
                $imgFilename = time() . '_img' . $i . '.' . $request->$imgField->extension();
                $imgPath = $request->file($imgField)->storeAs(
                    'imageprod',
                    $imgFilename,
                    'public'
                );

                $img->$imgField = $imgPath;
                $img->save();
            }
        }

        return $img;
    }
}

trait SelectImg
{

    public function InfoImg($id)
    {
        return Img::where('product_id', $id)->get();
    }
}

trait UpdateImg
{

    public function Update_table_Img($prod_id, $imgField, $imgPath)
    {
        return Img::where('product_id', $prod_id)
            ->update([$imgField => $imgPath]);
    }
    public function Update_table_All_Img($request)
    {
        if ($request->hasFile('main_image')) {

            $filename = time() . '.' . $request->main_image->extension();
            $path = $request->file('main_image')->storeAs(
                'imageprod',
                $filename,
                'public'
            );
            $this->Update_table_Img($request->prod_id, 'main_image', $path);
        }
        for ($i = 1; $i <= 4; $i++) {
            $imgField = 'img' . $i;
            if ($request->hasFile($imgField)) {
                $imgFilename = time() . '_img' . $i . '.' . $request->$imgField->extension();
                $imgPath = $request->file($imgField)->storeAs(
                    'imageprod',
                    $imgFilename,
                    'public'
                );
                $this->Update_table_Img($request->prod_id, $imgField, $imgPath);
            }
        }
    }
}


class Img extends Model
{
    use HasFactory,CreateImg,SelectImg,UpdateImg;
    protected $table = 'images';

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
        'product_id',
    ];
    public function prod()
    {
        return $this->belongsTo(Prod::class, 'product_id');
    }
}
