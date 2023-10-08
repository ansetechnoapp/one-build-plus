<?php

namespace App\Http\Controllers\dashboard\commentUser;

use App\Models\comment;
use Illuminate\Http\Request;
use App\Http\Controllers\dashboard\commentUser\view;

class update extends view
{
    public function affichage(Request $request, $id)
    {
        $issetcomment = comment::where('id', $id)->first();
        return view('dashboard.commentUser.update', ['infoComment' => $issetcomment]);
    }
}
