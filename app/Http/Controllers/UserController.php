<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
           
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            
            'password' => Hash::make('defaultpassword'), // Set a default password or handle password input
        ]);

        return redirect()->back()->with('success', 'User added successfully.');
    }
}
