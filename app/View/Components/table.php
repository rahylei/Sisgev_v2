<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;

class table extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $list;
    public $state;

    public function __construct(User $list, $state)
    {
        $this->list = $list->all();
        $this->state = $state;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table');
    }
}
