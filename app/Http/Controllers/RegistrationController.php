<?php

// app/Http/Controllers/RegistrationController.php
namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'faculty' => 'required|string|max:255',
        'regno' => 'required|string|max:255',
        'email' => 'required|email|unique:registrations',
        'mobile' => 'required|string|max:20',
        'sport' => 'nullable|string|max:255',
    ]);

    // Log the validated data to ensure it reaches this point
    // \Log::info('Validated Data:', $validatedData);

    // Attempt to create the registration
    $registration = Registration::create($validatedData);

    // Log the result to confirm successful creation
    // \Log::info('Registration Created:', $registration->toArray());

    return redirect()->back()->with('status', 'Registration successful!');
    return view('athlete.modal.register');

}

}
