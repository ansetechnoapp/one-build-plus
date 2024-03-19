<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\prod;

class researchform extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected $prod = new prod(),
    ) {
        $this->prod = $prod;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.researchform', [
            'ground_type' => $this->prod->select_Ground_type(),
            'communes' => $this->prod->select_Commune_table(),
        ]);
    }
}
