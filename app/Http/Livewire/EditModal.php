<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class EditModal extends ModalComponent
{

    public $labels;
    public $types;
    public $names;
    public $ids;
    public $item;
    public $formulario;
    public $self;

    public function mount($labels, $types, $names, $ids, $item, $formulario, $self)
    {
        $this->labels = $labels;
        $this->types = $types;
        $this->names = $names;
        $this->ids = $ids;
        $this->item = $item;
        $this->formulario = $formulario;
        $this->self = $self;
    }

    public function closeEdit(){
        $this->closeModal();
        return redirect($this->self);
    }  


    public function render()
    {
        return view('livewire.edit-modal');
    }
}
