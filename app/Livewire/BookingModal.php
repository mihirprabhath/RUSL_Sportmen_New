<?php

namespace App\Livewire;

use LivewireUI\Modal\ModalComponent;

class BookingModal extends ModalComponent
{
    public function render()
    {
        return view('livewire.booking-modal');
    }
}
