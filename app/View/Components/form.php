<?php

namespace App\View\Components;

use Illuminate\View\Component;

class form extends Component
{
    public $for, $sizes, $div;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($for, $sizes, $div)
    {
        $this->for = $for;
        $this->sizes = $sizes;
        $this->div = $div;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form');
    }
}
