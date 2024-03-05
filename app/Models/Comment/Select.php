<?php

namespace App\Models\Comment;

use App\Models\Comment;

trait Select
{

    public function selectCommmentForUserStatutEqualOne()
    { 
        return Comment::where('Statut', '1')->with('user')->get();
    }
    public function selectCommment($col,$id)
    { 
        return Comment::where($col, $id)->first();  
    }
    public function selectCommmentWithUser()
    { 
        return Comment::with('user')->get();  
    }
}
