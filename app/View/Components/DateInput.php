<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DateInput extends Component
{
    public $id;
    public $label;
    public $name;
    public $value;
    public $placeholder;

    public function __construct($id, $label, $name, $value = null, $placeholder = null)
    {
        $this->id = $id;
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
    }

    public function render()
    {
        return view('components.date-input');
    }
}
