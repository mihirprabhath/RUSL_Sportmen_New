<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\GroundController;
use App\Livewire\Athlete;
use App\Livewire\Booking;
use App\Models\SpecialGB;
use App\Livewire\CommentSection;
use App\Livewire\Teams;
use App\Livewire\Location;
use App\Livewire\Achievements;
use App\Livewire\UserManagement;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Keep only one route definition for the form submission
Route::post('/athlete/modal', [RegistrationController::class, 'store'])->name('register.store');



Route::get('/ground/availability', [GroundController::class, 'showGroundAvailability'])->name('ground.availability');



Route::get('/athlete', Athlete::class)->name('athlete');

Route::get('/booking', Booking::class)->name('booking');
Route::get('/comment-section', CommentSection::class)->name('comment-section');
Route::get('/teams', Teams::class)->name('teams');
Route::get('/location', Location::class)->name('location');
Route::get('/achievements', Achievements::class)->name('achievements');
Route::get('/user-management', UserManagement::class)->name('usermanagement');




Route::get('/ground-availability', function () {
    $bookings = SpecialGB::all();
    return view('ground-availability', compact('bookings'));
});


require __DIR__.'/auth.php';

