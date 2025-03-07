<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validate form inputs
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed', // Add password and confirmation
            'user_type' => 'required|string|in:user,admin,sub_admin,super_admin', // Validate user_type
        ]);

        // Create user with validated data
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']), // Hash the user-provided password
            'user_type' => $validated['user_type'], // Save user_type
        ]);

        // Assign role based on user_type
        if ($validated['user_type'] === 'admin') {
            $user->assignRole('admin'); // Ensure the role exists in the database
        } elseif ($validated['user_type'] === 'sub_admin') {
            $user->assignRole('sub_admin');
        } elseif ($validated['user_type'] === 'super_admin') {
            $user->assignRole('super_admin');
        } else {
            $user->assignRole('user');
        }
        

        return redirect()->back()->with('success', 'User added successfully.');
    }
}

