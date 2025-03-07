<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
     
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        @livewireStyles

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
         
    </head>
    <body class="font-sans antialiased">
  
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        @yield('content')
         
        @livewireScripts
        <script>
    document.querySelectorAll('.team-card').forEach(card => {
        card.addEventListener('mouseover', () => {
            card.classList.add('scale-105', 'shadow-lg'); // Scale up and add shadow
        });
        card.addEventListener('mouseout', () => {
            card.classList.remove('scale-105', 'shadow-lg'); // Reset scale and shadow
        });
    });
</script>
<script>
    function likeTeam(teamId) {
        const likeButton = document.getElementById(`like-btn-${teamId}`);
        likeButton.classList.toggle('text-red-500'); // Toggle the color for liked state
    }
</script>
<script>
    function openModal() {
        document.getElementById('addTeamModal').classList.remove('hidden');
    }
    function closeModal() {
        document.getElementById('addTeamModal').classList.add('hidden');
    }
</script>
   
@livewire('livewire-ui-modal')
    @livewireScripts


    </body>
</html>
