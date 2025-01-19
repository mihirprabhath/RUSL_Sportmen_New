<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Team;

class Teams extends Component
{
    use WithFileUploads;

    public $name;
    public $image;
    public $captain;
    public $description;

    public function addTeam()
    {
        // Validate form inputs
        $this->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|', // Validate uploaded image
            'captain' => 'required|string|max:255',
            'description' => 'required|string|max:500',
        ]);
    
        // Check if image is valid
        if ($this->image) {
            // Store the uploaded image
            $imagePath = $this->image->store('teams', 'public');
        } else {
            // Handle error if no image was uploaded
            dd('No image uploaded!');
        }
    
        // Create a new team record
        $team = Team::create([
            'name' => $this->name,
            'image' => $imagePath,
            'captain' => $this->captain,
            'description' => $this->description,
        ]);
    
        // Reset form fields after submission
        $this->reset(['name', 'image', 'captain', 'description']);
    
        // Emit an event to refresh the team list
        
    }
    

    public function render()
    {
        $teams = Team::all(); // Fetch all teams
        return view('livewire.teams', compact('teams'))->layout('layouts.app');
    }
}
