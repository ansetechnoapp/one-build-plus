<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class table_body_list extends Component
{

    public $header;
    /**
     * Create a new component instance.
     */
    public function __construct($header)
    {
        $this->header = $header; 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table_body_list');
    }
}