<div><br>
<div class="container mx-auto p-4 bg-white shadow rounded" style="
    height: 500px;">
    <h3 class="text-xl font-bold mb-4 text-gray-800">Comments</h3>

    <!-- Form to Add Comment -->
    <form wire:submit.prevent="addComment" class="mb-6">
        <textarea 
            wire:model="newComment" 
            placeholder="Add a comment..." 
            class="form-control w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200"
            required>
        </textarea>
        <button 
            type="submit" 
            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 mt-4 transition">
            Post Comment
        </button>
    </form>

    <!-- Comments Section -->
    <div class="comments space-y-4 max-h-96 overflow-y-auto" style="
    height: 270px;">
        @foreach($comments as $comment)
            <div class="comment-card bg-gray-100 p-4 rounded shadow-sm">
                <div class="flex justify-between items-center">
                    <p class="text-sm font-medium text-gray-700">
                        <strong>{{ $comment->user->name }}</strong>
                    </p>
                    <p class="text-xs text-gray-500">{{ $comment->created_at->diffForHumans() }}</p>
                </div>
                <p class="text-gray-800 mt-2">{{ $comment->comment }}</p>
            </div>
        @endforeach
    </div>
</div>
</div>