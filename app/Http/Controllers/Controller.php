<?php

namespace App\Http\Controllers;


use App\Models\Faq;
use App\Models\Image;
use App\Models\Product;
use App\Models\User;
use App\Models\Quote;
use App\Models\Comment;
use App\Models\FedapayTransaction;
use App\Models\FaqCategory;
use App\Models\HomeSliderImage;
use App\Models\AdditionalOption;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    protected $cM = 'communes';

    public function __construct(
        protected $comment = new Comment(),
        protected $user = new User(),
        protected $product = new Product(),
        protected $image = new Image(),
        protected $additionalOption = new AdditionalOption(),
        protected $quote = new Quote(),
        protected $faq = new Faq(),
        protected $homeSliderImage = new HomeSliderImage(),
        protected $faqCategory = new FaqCategory(),
        protected $fedapayTransaction = new FedapayTransaction(),
    ) {
        $this->comment = $comment;
        $this->user = $user;
        $this->product = $product;
        $this->image = $image;
        $this->additionalOption = $additionalOption;
        $this->quote = $quote;
        $this->faq = $faq;
        $this->homeSliderImage = $homeSliderImage;
        $this->faqCategory = $faqCategory;
        $this->fedapayTransaction = $fedapayTransaction;

        // Pour la compatibilité avec le code existant
        $this->Cm = $this->comment;
        $this->Users = $this->user;
        $this->prod = $this->product;
        $this->Img = $this->image;
        $this->Add_opt = $this->additionalOption;
        $this->devi = $this->quote;
        $this->imgslideHome = $this->homeSliderImage;
        $this->FaqT = $this->faqCategory;
        $this->fedap = $this->fedapayTransaction;
    }
    public function path_manager($path)
    {
        if ($path == '1') {
            return '../';
        } elseif ($path == '2') {
            return '../../';
        } elseif ($path == '3') {
            return '../../../';
        } elseif ($path == '4') {
            return '../../../../';
        } elseif ($path == '5') {
            return '../../../../../';
        } elseif ($path == '6') {
            return '../../../../../../';
        } else {
            return '';
        }
    }
    public function cache_time()
    {

        return env('CACHE_TIME',now()->addDays(2));
    }
}
