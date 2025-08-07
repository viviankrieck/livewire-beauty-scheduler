<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $math = '';
    public $result = 0;

    public function render()
    {
        return view('livewire.calculator');
    }

    public function addMath($number)
    {
        $this->math .= $number;
    }

    public function operation($operator)
    {
        if ($operator === '=') {
            $temp = str_replace('x', '*', $this->math); // Replace 'x' with '*' for multiplication
            $temp = str_replace('%', '/100 * ', $temp); // Handle percentage

            $this->result = eval('return ' . $temp . ';');
        } else {
            $this->math .= ' ' . $operator . ' ';
        }
    }

    public function clearMath()
    {
        $this->math = '';
        $this->result = 0;
    }

    public function clearEntry()
    {
        $this->math = '';
    }


    // public $number = 0;
    // public $total = 0;

    // public $number2 = 0;

    // public function increment()
    // {
    //     $this->total = $this->number + $this->number2;
    // }
    // public function decrement()
    // {
    //     $this->total = $this->number - $this->number2;
    // }
}
