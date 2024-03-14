<?php

namespace App\Http\Controllers;


use App\Models\faq;
use App\Models\img;
use App\Models\prod;
use App\Models\User;
use App\Models\devis;
use App\Models\comment;
use App\Models\fedapay;
use App\Models\faq_title;
use App\Models\imageslidehome;
use App\Models\additional_option;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    protected $cM = 'communes';

    public function __construct(
        protected $Cm = new comment(),
        protected $Users = new User(),
        protected $prod = new prod(),
        protected $Img = new img(),
        protected $Add_opt = new additional_option(),
        protected $devi = new devis(),
        protected $faq = new faq(),
        protected $imgslideHome = new imageslidehome(),
        protected $FaqT = new faq_title(),
        protected $fedap = new fedapay(),
    ) {
        $this->Cm = $Cm;
        $this->Users = $Users;
        $this->prod = $prod;
        $this->Img = $Img;
        $this->Add_opt = $Add_opt;
        $this->devi = $devi;
        $this->faq = $faq;
        $this->imgslideHome = $imgslideHome;
        $this->FaqT = $FaqT;
        $this->fedap = $fedap;
    }
    public function sub_path_admin()
    {
        return (Auth::check() && Auth::user()->role == 'admin') ? '../' : '';
    }
    public function cache_time()
    {
        return now()->addDays(2); // Cache les données pendant 5 minutes
        //  60; // Cache les données pendant 1 heure
        //  1440; // Cache les données pendant 24 heures (24 heures * 60 minutes)
        //  10080; // Cache les données pendant 7 jours (7 jours * 24 heures * 60 minutes)
        //  43200; // Cache les données pendant 30 jours (30 jours * 24 heures * 60 minutes)
    }
}
