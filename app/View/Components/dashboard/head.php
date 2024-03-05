<?php

namespace App\View\Components\dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class head extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $title,public $subpathadmin)
    {
        $this->title = $title;
        $this->subpathadmin = $subpathadmin;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.head');
    }
}
