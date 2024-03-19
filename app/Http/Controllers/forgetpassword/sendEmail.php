<?php

namespace App\Http\Controllers\forgetpassword;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sendEmail extends Controller
{
    public function authrepassword(Request $request)
    {
        $parm1 = $request->parm1;
        return view('forgetpassword.sendEmail', ['parm1' => $parm1,'path_manager' => $this->path_manager(0),]);
    }
}
