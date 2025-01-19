<div class="mt-8 bg-white shadow-sm rounded-lg p-6">

<livewire:registration-table/>
<!-- 
<div>

    <h1>Athlete Registrations</h1>
    
    <table border="1" style="width: 100%; text-align: left;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Faculty</th>
                <th>Reg No</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Sport</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($registrations as $registration)
                <tr>
                    <td>{{ $registration->id }}</td>
                    <td>{{ $registration->name }}</td>
                    <td>{{ $registration->faculty }}</td>
                    <td>{{ $registration->regno }}</td>
                    <td>{{ $registration->email }}</td>
                    <td>{{ $registration->mobile }}</td>
                    <td>{{ $registration->sport ?? 'N/A' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No registrations found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div> -->

        </div>