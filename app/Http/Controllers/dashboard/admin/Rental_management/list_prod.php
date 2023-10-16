<?php

namespace App\Http\Controllers\dashboard\admin\Rental_management;

use App\Models\prod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class list_prod extends Controller
{
    public function show(Request $request)
    {
        $posts = prod::where('location','oui')->get();
        return view('dashboard.admin.Rental_management.list_prod', ['allprod' => $posts]);
    }
}
