<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Achievement;

class Achievements extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $image;
    public $achieved_on;

    public function addAchievement()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|',
            'achieved_on' => 'required|date',
        ]);

        $imagePath = $this->image ? $this->image->store('achievements', 'public') : null;

        Achievement::create([
            'title' => $this->title,
            'description' => $this->description,
            'image' => $imagePath,
            'achieved_on' => $this->achieved_on,
        ]);

        $this->reset(['title', 'description', 'image', 'achieved_on']);
        session()->flash('success', 'Achievement added successfully!');
    }

    public function render()
    {
        $achievements = Achievement::all();
        return view('livewire.achievements', compact('achievements'))->layout('layouts.app');
    }
}
