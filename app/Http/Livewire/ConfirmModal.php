<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class ConfirmModal extends ModalComponent
{

    public $estilos;
    public $tipo;
    public $ruta;
    public $user;
    public $self;

    public function mount($estilos, $tipo, $ruta, $user, $self){        
        $this->estilos = $estilos;
        $this->tipo = $tipo;
        $this->ruta = $ruta;
        $this->user = $user;
        $this->self = $self;
    }  
    
    public function closeConfirm(){
        $this->closeModal();
        return redirect($this->self);
    }

    public function render()
    {
        return view('livewire.confirm-modal');
    }
}
