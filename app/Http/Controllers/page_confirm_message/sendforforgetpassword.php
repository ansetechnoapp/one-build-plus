<?php

namespace App\Http\Controllers\page_confirm_message;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sendforforgetpassword extends Controller
{
    function view() {
        return view('page_confirm_message.sendforforgetpassword',['path_manager' => $this->path_manager(0),]);
    }
}
