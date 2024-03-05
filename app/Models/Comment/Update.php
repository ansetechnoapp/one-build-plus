<?php

namespace App\Models\Comment;

use App\Models\Comment;

trait Update
{

    public function UpdateCommmentForCol($col, $enter, $Statut, $value)
    {
        return Comment::where($col, $enter)->update([
            $Statut => $value,
        ]);
    }
}
