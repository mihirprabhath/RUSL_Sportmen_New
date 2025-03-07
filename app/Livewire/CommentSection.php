<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CommentSection extends Component
{
    public $comments; // Holds the list of comments
    public $newComment; // Holds the new comment input

    // Load comments when the component is mounted
    public function mount()
    {
        $this->comments = Comment::with('user')->latest()->get();
    }

    // Add a new comment
    public function addComment()
    {
        // Validate the input
        $this->validate([
            'newComment' => 'required|max:255',
        ]);

        // Create the comment
        $comment = Comment::create([
            'user_id' => Auth::id(),
            'comment' => $this->newComment,
        ]);

        // Add the new comment to the top of the list
        $this->comments->prepend($comment);

        // Clear the input
        $this->newComment = ''; // This will automatically clear the text box due to wire:model

        // Optionally, you can add a flash message or success message
    }

    public function render()
    {
        return view('livewire.comment-section')
            ->layout('layouts.app');
    }
}

