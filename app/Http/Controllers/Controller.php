<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function selectCommmentForUserStatutEqualOne()
    { 
        return comment::where('Statut', '1')->with('user')->get();
    }
}
