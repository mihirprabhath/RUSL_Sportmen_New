<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\SpecialGB;

class Booking extends Component
{
    public $booker_name;
    public $contact_number;
    public $date;
    public $time;
    public $place;
    public $sport;

    public function store()
    {
        try {
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
            $this->dispatchBrowserEvent('close-modal'); // Close the modal
        } catch (\Exception $e) {
            session()->flash('error', 'An error occurred while creating the booking: ' . $e->getMessage());
        }
    }
     
    public function render()
    {
        $bookings = SpecialGB::all();
        return view('livewire.booking', ['bookings' => $bookings])
            ->layout('layouts.app'); 
    }
}
