<?php

namespace App\Http\Controllers\home;

use App\Models\comment;
use Illuminate\Http\Request;
use App\Models\prod as insertion;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class index extends Controller
{
    public function requestForHome()
    {
        $selectCommunetableProdForHome = insertion::distinct()->select('department', 'communes')->get();
        $selectGround_typetableProdForHome = insertion::distinct()->select('ground_type')->get();

        
        $lastThree_loation = insertion::where('location','oui')->orderBy('id', 'asc')->take(3)->get();
        $beforeLastThree_loation = insertion::where('location','oui')->whereNotIn('id', $lastThree_loation->pluck('id'))
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();
            
            $selecttableProdForHome = insertion::orderBy('id', 'desc')->take(9)->get();
        $lastThree = insertion::orderBy('id', 'asc')->take(3)->get();
        $beforeLastThree = insertion::whereNotIn('id', $lastThree->pluck('id'))
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();
        $selectCommment = comment::where('Statut', '1')->with('user')->get();

        return view('home.index', ['ground_type' => $selectGround_typetableProdForHome, 'commune' => $selectCommunetableProdForHome, 'posts' => $selecttableProdForHome, 'posts1' => 
        $lastThree, 'posts2' => $beforeLastThree, 'selectCommment' => $selectCommment
        , 'lastThree_loation' => $lastThree_loation
        , 'beforeLastThree_loation' => $beforeLastThree_loation]);
    }
}