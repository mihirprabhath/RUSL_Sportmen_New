<?php

namespace App\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\SpecialGB;

class ModalBooking extends ModalComponent
{
    public $booker_name;
    public $contact_number;
    public $date;
    public $time;
    public $place;
    public $sport;

    public function store()
    {
        $this->validate([
            'booker_name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:15',
            'date' => 'required|date',
            'time' => 'required',
            'place' => 'required|string|max:255',
            'sport' => 'required|string|max:255',
        ]);

        SpecialGB::create([
            'booker_name' => $this->booker_name,
            'contact_number' => $this->contact_number,
            'date' => $this->date,
            'time' => $this->time,
            'place' => $this->place,
            'sport' => $this->sport,
        ]);

        session()->flash('success', 'Booking has been successfully created.');
        $this->dispatch('closeModal'); // Close the modal
        return redirect()->back();
   
    }

    public function render()
    {
        return view('livewire.modal-booking');
    }

}
