<?php

namespace App\Models\Img;

use App\Models\Img;

trait Update
{

    public function Update_table_Img($prod_id, $imgField, $imgPath)
    {
        return Img::where('prod_id', $prod_id)
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
