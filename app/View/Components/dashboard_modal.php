<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class dashboard_modal extends Component
{
    public $title;
    public $message;
    public $path;
    /**
     * Create a new component instance.
     */
    public function __construct($title,$message,$path)
    {
        $this->title = $title;
        $this->message = $message;
        $this->path = $path;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard_modal');
    }
}
