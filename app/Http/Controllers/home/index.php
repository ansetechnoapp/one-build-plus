<?php

namespace App\Http\Controllers\home;

use App\Models\comment;
use Illuminate\Http\Request;
use App\Models\prod;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class index extends Controller
{
    public function requestForHome()
    {
        $selectCommunetableProdForHome = prod::distinct()->select('department', 'communes')->get();
        $selectGround_typetableProdForHome = prod::distinct()->select('ground_type')->whereNotNull('ground_type')->get();


        $lastThree_loation = prod::where('location', 'oui')->orderBy('id', 'asc')->take(3)->get();
        $beforeThree_loation = prod::where('location', 'oui')->whereNotIn('id', $lastThree_loation->pluck('id'))
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();

        $selecttableProdForHome = prod::where('location', 'non')->with('img')->orderBy('id', 'desc')->take(9)->get();
        $lastThree = prod::orderBy('id', 'asc')->take(3)->get();
        $beforeLastThree = prod::whereNotIn('id', $lastThree->pluck('id'))
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();
        $selectCommment = comment::where('Statut', '1')->with('user')->get();

        return view('home.index', [
            'ground_type' => $selectGround_typetableProdForHome, 'commune' => $selectCommunetableProdForHome, 'posts' => $selecttableProdForHome, 'posts1' =>
            $lastThree, 'posts2' => $beforeLastThree, 'selectCommment' => $selectCommment, 'lastThree_loation' => $lastThree_loation, 'beforeThree_loation' => $beforeThree_loation
        ]);
    }
}
