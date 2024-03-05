<?php

namespace App\Http\Controllers;


use App\Models\Faq;
use App\Models\Img;
use App\Models\Prod;
use App\Models\User;
use App\Models\Devis;
use App\Models\Comment;
use App\Models\Fedapay;
use App\Models\Faq_title;
use App\Models\Imageslidehome;
use App\Models\Additional_option;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    protected $cM = 'communes';

    public function __construct(
        protected $Cm = new Comment(),
        protected $Users = new User(),
        protected $prod = new Prod(),
        protected $Img = new Img(),
        protected $Add_opt = new Additional_option(),
        protected $devi = new Devis(),
        protected $faq = new Faq(),
        protected $imgslideHome = new Imageslidehome(),
        protected $FaqT = new Faq_title(),
        protected $fedap = new Fedapay(),
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
}
