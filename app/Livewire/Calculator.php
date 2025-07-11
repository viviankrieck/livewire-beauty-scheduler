<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $number = 0;
    public $number2 = 0;
    public $total = 0;

    public function render()
    {
        return view('livewire.calculator');
    }

    public function increment()
    {
        $this->total = $this->number + $this->number2;
    }
    public function decrement()
    {
        $this->total = $this->number - $this->number2;
    }
}