<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class index extends Controller
{
    public function requestForHome()
    {
        return view('home.index', [
            'selecttableProdForHome' => $this->prod->select_take_location_prod_with_image('non', 'desc', 9),
            'posts1' => $this->prod->select_last_prod(3, 'asc'),
            'posts2' => $this->prod->whereNotIn('id', $this->prod->select_last_prod(3, 'asc')->pluck('id'))->orderBy('id', 'desc')->take(3)->get(),
            'selectCommment' => $this->Cm->selectCommmentForUserStatutEqualOne(),
            'lastThree_loation' => $this->prod->select_take_location_prod('oui', 'asc', 3),
            'beforeThree_loation' => $this->prod->where('location', 'oui')->whereNotIn('id', $this->prod->select_take_location_prod('oui', 'asc', 3)->pluck('id'))->orderBy('id', 'desc')->take(3)->get(),
            'imgslide' => $this->homeSliderImage->SelectImageslidehome('id', '1'),
            'path_manager' => $this->path_manager(0),
        ]);
    }
}
