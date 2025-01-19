<?php

namespace App\Livewire;

use Livewire\Component;

class Location extends Component
{
    public $latitude = '8.367140875905067'; // Default latitude
    public $longitude = '80.509483647503'; // Default longitude
    public $locationName = 'Rajarata University  Playground '; // Customize with your ground's name

    public function render()
    {
        return view('livewire.location')->layout('layouts.app');
    }
}
