<?php

namespace App\Http\Controllers\home;

use App\Models\comment;
use Illuminate\Http\Request;
use App\Models\prod;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\imageslidehome;

class index extends Controller
{
    public function requestForHome()
    {
        $lastThree_loation = prod::where('location', 'oui')->orderBy('id', 'asc')->take(3)->get();
        $lastThree = prod::orderBy('id', 'asc')->take(3)->get();
        return view('home.index', [
            'selectGround_typetableProdForHome' => prod::distinct()->select('ground_type')->whereNotNull('ground_type')->get(),
            'selectCommunetableProdForHome' => prod::distinct()->select('department', 'communes')->get(),
            'selecttableProdForHome' => prod::where('location', 'non')->with('img')->orderBy('id', 'desc')->take(9)->get(),
            'posts1' => $lastThree,
            'posts2' => prod::whereNotIn('id', $lastThree->pluck('id'))->orderBy('id', 'desc')->take(3)->get(),
            'selectCommment' => $this->selectCommmentForUserStatutEqualOne(),
            'lastThree_loation' => $lastThree_loation,
            'beforeThree_loation' => prod::where('location', 'oui')->whereNotIn('id', $lastThree_loation->pluck('id'))->orderBy('id', 'desc')->take(3)->get(),
            'imgslide' => imageslidehome::where('id', '1')->first()
        ]);
    }
}