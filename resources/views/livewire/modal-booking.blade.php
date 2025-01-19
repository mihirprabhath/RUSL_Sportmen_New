<div class="p-6">
    <form wire:submit.prevent="store" class="flex justify-between space-x-4">
        <!-- Left Section: First Half of Input Fields -->
        <div class="w-1/2">
            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Name of Booker:</label>
                <input type="text" wire:model="booker_name" class="w-full border-green-300 rounded shadow-sm" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Contact Number:</label>
                <input type="text" wire:model="contact_number" class="w-full border-green-300 rounded shadow-sm" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Date:</label>
                <input type="date" wire:model="date" class="w-full border-green-300 rounded shadow-sm" required>
            </div>
        </div>

        <!-- Right Section: Second Half of Input Fields and Button -->
        <div class="w-1/2">
            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Time:</label>
                <input type="time" wire:model="time" class="w-full border-green-300 rounded shadow-sm" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Place:</label>
                <select wire:model="place" class="w-full border-green-300 rounded shadow-sm" required>
                    <option value="" disabled selected>Select a place</option>
                    <option value="Main Ground">Main Ground</option>
                    <option value="Indoor Stadium">Indoor Stadium</option>
                    <option value="Pool">Pool</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Sport:</label>
                <input type="text" wire:model="sport" class="w-full border-green-300 rounded shadow-sm" required>
            </div>
            <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded hover:bg-orange-600 w-full">
                Book Ground
            </button>
        </div>
    </form>
</div>
