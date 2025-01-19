<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroundController extends Controller
{
    public function showGroundAvailability()
    {
        // Add any data you need to pass to the view here
        return view('ground.ground_ab');
    }
}
