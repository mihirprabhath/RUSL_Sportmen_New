<div>
    <br>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        <livewire:add-user />


        @if(auth()->user()->hasAnyRole(['super_admin', 'admin']))
       
            <!-- Taking namespace into account for component Admin/Actions/EditUser -->
            <button class="bg-blue-500 text-white py-2  px-4 rounded hover:bg-blue-600 margin-top 10px" href="#" class="dashboard-item" data-toggle="modal" data-target="#adduser">
                Add User
            </button>
        @endif
 
            <livewire:user-table />
            
            <script>
    document.addEventListener('DOMContentLoaded', () => {
        window.addEventListener('openModal', event => {
            const userId = event.detail.userId;
            Livewire.emit('mount', userId); // Pass userId to the Livewire component
            const modal = new bootstrap.Modal(document.getElementById('editUserModal'));
            modal.show();
        });

        window.addEventListener('closeModal', () => {
            const modal = bootstrap.Modal.getInstance(document.getElementById('editUserModal'));
            modal.hide();
        });
    });
</script>


        </div>
    </div>
</div>