<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Athlete; // Adjust model if needed

class AthleteRegistration extends Component
{
    public $name, $email; // Add other fields

    public function register()
    {
        // Validation logic
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:athletes,email', // Adjust model/table as necessary
        ]);

        // Store athlete in the database
        Athlete::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        // Reset fields
        $this->reset();

        // Optionally show a success message
        session()->flash('message', 'Athlete registered successfully.');
    }

    public function render()
    {
        return view('livewire.athlete-registration');
    }
}
