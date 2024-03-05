<?php

namespace App\Models\Img;

use App\Models\Img;

trait Create
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
