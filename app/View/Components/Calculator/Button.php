<?php

namespace App\View\Components\Calculator;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $value;
    public $type;
    public $action;

    /**
     * Create a new component instance.
     */
    public function __construct($value = null, $type = 'default', $action = null)
    {
        $this->value = $value;
        $this->type = $type;
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.calculator.button');
    }
}
