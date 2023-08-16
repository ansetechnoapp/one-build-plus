<?php

namespace App\Http\Controllers\prod;

use App\Models\prod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class select extends Controller
{
    public function show()
    {
        $posts = prod::all();
        return view('dashboard.admin.list_prod.index', ['allprod' => $posts]);
    }
}
