<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Arr;

class ModalConfirm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $estilos;
    public $tipo;
    public $ruta;
    public $id;

    public function __construct($estilos, $tipo, $ruta, $id)
    {
        $this->estilos = $estilos;
        $this->tipo = $tipo;
        $this->ruta = $ruta[0];
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal-confirm');
    }
}
