<?php

namespace App\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class AddUser extends ModalComponent
{
    public function render()
    {
        return view('livewire.add-user');
    }
}
