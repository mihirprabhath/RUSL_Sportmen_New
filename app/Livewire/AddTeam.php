<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddTeam extends Component
{
    use WithFileUploads;

    public $name;
    public $image;
    public $captain;
    public $description;

    public function addTeam()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|max:2048', // Validate image upload
            'captain' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $imagePath = $this->image->store('teams', 'public'); // Save the image to the 'teams' directory in the public disk

        Team::create([
            'name' => $this->name,
            'image' => $imagePath,
            'captain' => $this->captain,
            'description' => $this->description,
        ]);

        // Reset the form fields
        $this->reset();

        // Emit an event to refresh the team list
        $this->emit('teamAdded');

        // Close the modal
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        return view('livewire.add-team')
            ->layout('layouts.app');
    }
}

