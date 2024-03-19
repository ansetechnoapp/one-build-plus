<?php

namespace App\Http\Controllers\privacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index extends Controller
{
    function view() {
        return view('privacy.index',['path_manager' => $this->path_manager(0),]);
    }
}
