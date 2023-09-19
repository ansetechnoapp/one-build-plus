<?php

namespace App\Http\Controllers\search;

use App\Http\Controllers\Controller;
use App\Models\prod as insertion;
use Illuminate\Http\Request;

class prod extends Controller
{


    public function allselecttableProdForHome()
    {
        $selectCommunetableProdForHome = insertion::distinct()->select('department', 'communes')->get();
        $selecttableProdForHome = insertion::orderBy('id', 'desc')->take(9)->get();
        $lastThree = insertion::orderBy('id', 'asc')->take(3)->get();
        $beforeLastThree = insertion::whereNotIn('id', $lastThree->pluck('id'))
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();

        return view('home.index', ['commune' => $selectCommunetableProdForHome,'posts' => $selecttableProdForHome, 'posts1' => $lastThree, 'posts2' =>$beforeLastThree]);
    }
}
