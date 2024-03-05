<?php

namespace App\Models\Prod;

use App\Models\Prod;

trait Update
{
    public function Update_table_prod_step1($request, $loc)
    {
        $product = $this->select_prod('id', $request->prod_id);
        return $product->update([
            'landOwner_propertyName' => $request->landOwner_propertyName,
            'address' => $request->address,
            'department' => $request->department,
            'communes' => $request->communes,
            'area' => $request->area,
            'status' => $request->status,
            'location' => $loc,
        ]);
    }
    public function Update_table_prod_step2($request, $price, $price_min, $type, $value_type, $type1, $value_type1, $type2, $value_type2)
    {
        $product = $this->select_prod('id', $request->prod_id);
        return $product->update([
            'borough' => $request->borough,
            'price' => $price,
            'price_min' => $price_min,
            'description' => $request->description,
            $type => $value_type,
            $type1 => $value_type1,
            $type2 => $value_type2,
        ]);
    }
}
