<div><br>

<div class="container mx-auto p-6 bg-white shadow rounded">
<div class="flex justify-end mb-4">
 
    <button onclick="openModal()" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
        + Add Team
    </button>
 </div>

 
<!-- Add Team Modal -->
<div id="addTeamModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg w-1/3 p-6">
        <h2 class="text-xl font-bold mb-4 text-gray-800">Add New Team</h2>
        <form wire:submit.prevent="addTeam" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium">Team Name</label>
                <input type="text" id="name" wire:model="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" required>
            </div>
           
            <div class="mb-4">
                <label for="captain" class="block text-gray-700 font-medium">Captain</label>
                <input type="text" id="captain" wire:model="captain" class="w-full px-4 py-2 border rounded-lg focus:outline-none" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium">Description</label>
                <textarea id="description" wire:model="description" class="w-full px-4 py-2 border rounded-lg focus:outline-none" rows="4" required></textarea>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-medium">Team Image</label>
                <input type="file" id="image" wire:model="image" class="w-full border rounded-lg focus:outline-none">
            </div>
            <div class="flex justify-end">
                <button type="button" onclick="closeModal()" class="px-4 py-2 bg-gray-500 text-white rounded-lg mr-2">Cancel</button>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Add Team</button>
            </div>
        </form>
    </div>
</div>

 
    <!-- Scrollable Card Section -->
    <div class="overflow-y-auto" style="max-height: 400px;">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
    @foreach ($teams as $team)
    <div class="bg-white shadow-md rounded p-4 transform transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg hover:border-[#03746a] hover:bg-[#e0f7f4]">
            <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}" class="w-60 h-40 object-cover rounded-lg mb-4 border border-gray-300">
            <h3 class="text-lg font-semibold text-gray-800">{{ $team->name }}</h3>
                <p class="text-sm text-gray-600 mb-2"><strong>Captain:</strong> {{ $team->captain }}</p>
                <p class="text-sm text-gray-600 text-center">{{ $team->description }}</p>
                <button id="like-btn-{{ $team->id }}" onclick="likeTeam({{ $team->id }})" class="text-gray-500 mt-2">
        ❤️ Like
    </button>
            </div>

            @endforeach
        </div>
    </div>
    <script>
   
</script>
</div>
</div>