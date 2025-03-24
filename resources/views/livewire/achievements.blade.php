

<div><br>

<div class="container mx-auto p-6 bg-white shadow rounded">
<div class="flex justify-end mb-4">
 

    <button onclick="openModal()" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-800">
        + Add Achievement
    </button>
 
</div>

    <!-- Add Achievement Modal -->
    <div id="addTeamModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg w-1/3 p-6">
            <h2 class="text-xl font-bold mb-4 text-gray-800">Add New Team</h2>
            <form wire:submit.prevent="addAchievement" enctype="multipart/form-data">
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-medium">Title</label>
                    <input type="text" id="title" wire:model="title" class="w-full px-4 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-medium">Description</label>
                    <textarea id="description" wire:model="description" class="w-full px-4 py-2 border rounded-lg" rows="4" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-gray-700 font-medium">Image</label>
                    <input type="file" id="image" wire:model="image" class="w-full px-4 py-2 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="achieved_on" class="block text-gray-700 font-medium">Date of Achievement</label>
                    <input type="date" id="achieved_on" wire:model="achieved_on" class="w-full px-4 py-2 border rounded-lg" required>
                </div>
                <div class="flex justify-end">
                <button type="button" onclick="closeModal()" class="px-4 py-2 bg-gray-500 text-white rounded-lg mr-2">Cancel</button>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Add Achievement</button>
            </div>            </form>
        </div>
    </div>

<!-- Achievements List -->
<div class="overflow-y-auto" style="max-height: 400px;">
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
    @foreach ($achievements as $achievement)
    <div class="bg-white shadow-md rounded p-4 transform transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg hover:border-[#03746a] hover:bg-[#e0f7f4]">
        <img src="{{ asset('storage/' . $achievement->image) }}" alt="{{ $achievement->name }}" class="w-60 h-40 object-cover rounded-lg mb-4">
        <h3 class="text-lg font-semibold text-gray-800">{{ $achievement->title }}</h3>
        <p class="text-sm text-gray-600">{{ $achievement->description }}</p>
        <p class="text-sm text-gray-500 mt-2"><strong>Date:</strong> {{ $achievement->achieved_on }}</p>
    </div>
    @endforeach
</div>
</div>

</div>