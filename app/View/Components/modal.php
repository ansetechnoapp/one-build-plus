<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class modal extends Component
{
    public $title;
    public $message;
    public $btn1;
    public $btn2;
    /**
     * Create a new component instance.
     */
    public function __construct($title,$message,$btn1,$btn2)
    {
        $this->title = $title;
        $this->message = $message;
        $this->btn1 = $btn1;
        $this->btn2 = $btn2;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal');
    }
}