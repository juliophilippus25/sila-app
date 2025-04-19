<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    public $name;
    public $label;
    public $options;
    public $placeholder;
    public $selected;

    /**
     * Create a new component instance.
     */
    public function __construct($name, $label, $options, $placeholder = null, $selected = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->options = $options;
        $this->placeholder = $placeholder;
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select');
    }
}
