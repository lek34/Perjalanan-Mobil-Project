<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DropdownPicker extends Component
{
    public $options;
    public $selectedOption;

    public function __construct($options, $selectedOption = null)
    {
        $this->options = $options;
        $this->selectedOption = $selectedOption;
    }

    public function render()
    {
        return view('components.dropdown-picker');
    }
}
