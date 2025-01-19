<form wire:submit.prevent="register">
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" wire:model="name">
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" id="email" wire:model="email">
    </div>

    <!-- Add other fields as necessary -->

    <button type="submit">Register Athlete</button>
</form>
