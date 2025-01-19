<?php

namespace App\Livewire;

use Livewire\Component;
use App\models\Registration;

class Athlete extends Component

{

    

    
    public $registrations; // Declare a property to hold registrations data

    public function mount()
    {
        // Fetch all registrations from the database
        $this->registrations = Registration::all();
    }

    public function render()
    {
        return view('livewire.athlete')
            ->layout('layouts.app'); // Specify the layout explicitly
    }

    
}




