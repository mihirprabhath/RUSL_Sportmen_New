<x-app-layout>


    <?php

    session_start();

    ?>


    <html>

    <head>


        <link rel="stylesheet" href="../style/a_dashboard.css">
        <link rel="stylesheet" href="user_page.css">
        <link rel="stylesheet" href="../style/u_dashboard.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
        <livewire:styles />
        <style>
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
            }

            .dashboard {
                display: flex;
                flex-wrap: wrap;
                gap: 40px;
                padding: 20px;
                justify-content: center;
            }

            .dashboard-item {
                color: inherit;
                text-decoration: none;
                background-color: #fff;
                border-radius: 12px;
                width: 250px;
                height: 220px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                text-align: center;
                color: #03746a;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                border: 2px solid transparent;
            }

            .dashboard-item:hover {
                transform: translateY(-8px);
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                border-color: #03746a;
                background-color: #e0f7f4;
            }

            .dashboard-item i {
                font-size: 46px;
                margin-bottom: 10px;
                color: #03746a;
            }

            .dashboard-item p {
                margin: 12;
                font-size: 16px;
                font-weight: bold;
                color: #333;
            }

            .dashboard-item:hover p {
                color: #03746a;
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                .dashboard-item {
                    width: 120px;
                    height: 120px;
                }

                .dashboard-item i {
                    font-size: 30px;
                }

                .dashboard-item p {
                    font-size: 14px;
                }
            }
        </style>

    </head>
    <!--  -->

    <div class="py-12" style="
    padding-top: 2rem;
">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
       

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            

                <!-- <div class="p-6 text-gray-900">
                    
<div class="container" style="margin:20px;">

<div class="layout" style="  background-color: black; width: 90%; height:100%; float:right; padding:7px;">

  -->



                <div class="dashboard">

                    <!-- Athlete Registration -->
                    <p> <button class="dashboard-item" href="#" data-toggle="modal" data-target="#ModalCreate">
                            <i class="icon fa fa-book"></i> <b class="color-black">Registration</b>
                        </button></p>

                    

                    <!-- user Management -->
                    @if(auth()->user()->hasAnyRole(['super_admin', 'admin']))

                    <p> <button class="dashboard-item" onclick="window.location.href='{{ route('user-management') }}'">
                            <i class="icon fa fa-user"></i> <b class="color-black">Users</b>
                        </button></p>
                    @endif

                    <!-- Athlete  -->
                    @if(auth()->user()->hasAnyRole(['super_admin', 'admin', 'sub_admin']))
                    <p> <button class="dashboard-item" onclick="window.location.href='{{ route('athlete') }}'">
                            <i class="icon fa fa-book"></i> <b class="color-black">Athlete</b>
                        </button></p>
                    @endif

                    <!-- Ground Availability -->

                    <p> <button class="dashboard-item" onclick="window.location.href='{{ route('ground.availability') }}'">
                            <i class="icon fa fa-book"></i> <b class="color-black">Ground Availability</b>
                        </button></p>
                        
                     
                    <!-- Ground Booking -->

                    <p> <button class="dashboard-item" onclick="window.location.href='{{ route('booking') }}'">
                            <i class="icon fa fa-book"></i> <b class="color-black">Ground Booking</b>
                        </button>
                    </p>

                    <p> <button class="dashboard-item" onclick="window.location.href='{{ route('comment-section') }}'">
                            <i class="icon fa fa-comment"></i> <b class="color-black">Comment</b>
                        </button>
                    </p>
                    <p> <button class="dashboard-item" onclick="window.location.href='{{ route('teams') }}'">
                            <i class="icon fa fa-image"></i> <b class="color-black">Teams</b>
                        </button>
                    </p>
                    <p>
                        <button class="dashboard-item" onclick="window.location.href='{{ route('achievements') }}'">
                            <i class="icon fa fa-trophy"></i>
                            <b class="color-black">Achievements</b>
                        </button>
                    </p>

                    <p>
                        <button class="dashboard-item" onclick="window.location.href='{{ route('location') }}'">
                            <i class="icon fa fa-exclamation-triangle"></i>
                            <b class="color-black">Location</b>
                        </button>
                    </p>


                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif





            </div>
        </div>
   

    </div>
    </div>
    <!-- <script>
    Livewire.on('openModal', () => {
        document.getElementById('athleteModal').style.display = 'block';
    });
</script> -->



    @yield('content')
    <livewire:scripts />

    @include('athlete.modal.register')


</x-app-layout>