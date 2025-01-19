<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\SpecialGB;

class Booking extends Component
{
    public function render()
    {
        // Fetch all bookings from the database
        $bookings = SpecialGB::all();

        // Pass the bookings to the view
        return view('livewire.booking', ['bookings' => $bookings])
            ->layout('layouts.app'); 
    }

}


