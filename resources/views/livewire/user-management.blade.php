<div>
    <br>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">




            <!-- Taking namespace into account for component Admin/Actions/EditUser -->
            <button class="bg-blue-500 text-white py-2  px-4 rounded hover:bg-blue-600 margin-top 10px" href="#" class="dashboard-item" data-toggle="modal" data-target="#adduser">
                Add User
            </button>

            <livewire:user-table />
            <livewire:add-user />

        </div>
    </div>
</div>