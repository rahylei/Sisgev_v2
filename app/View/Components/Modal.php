<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $labels;
    public $types;
    public $names;
    public $ids;
    public $placeholders;
    public $formulario;

    public function __construct($labels, $types, $names, $ids, $placeholders, $formulario)
    {
        $this->labels = $labels;
        $this->types = $types;
        $this->names = $names;
        $this->ids = $ids;
        $this->placeholders = $placeholders;
        $this->formulario = $formulario;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
