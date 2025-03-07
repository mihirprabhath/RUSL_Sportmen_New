
<layout>
<?php 

session_start();

?>


<html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Card Sections</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/a_dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('user_page.css') }}">
    <link rel="stylesheet" href="{{ asset('style/u_dashboard.css') }}">
    @livewireStyles
    @livewire('livewire-ui-modal')
  <style>

        *{
            margin:0;
            
        }


        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #03746a;
        
    
        }

        li {
        float: left;
        }

        li a {
        display: block;
        color: white;
        text-align: center;
        padding: 22px 22px;
        text-decoration: none;
        }

        li a:hover:not(.active) {
        background-color: #111;
        }

        .active {
        background-color: #04AA6D;
        }
        .logo img {
            height: 40px;
            width: 32px;
            margin-left: 14px;
            margin-right: 12px;
            margin-top: -7px;
        }

        .navbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
    color: white;
}


.heading {
    font-size: 30px;
    color: white;
    margin: 0;
    font-weight: bold;
}
        .main-menu {
            
background:#03746a;
border-right:1px solid #e5e5e5;
position:fixed;
top: 0;
bottom:0;
height:100vh;
left:0;
width:60px;
overflow:hidden;
-webkit-transition:width .05s linear;
transition:width .05s linear;
z-index:1000;
}

.main-menu li>a {
position:relative;
display:table;
border-collapse:collapse;
border-spacing:0;
color:#ffffff;
font-family: arial;
font-size: 14px;
text-decoration:none;
-webkit-transition:all .1s linear;
transition:all .1s linear;
}
       
       /* Basic reset */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
}

 
.navbar-right {
    display: flex;
    align-items: center;
    gap: 15px;
}

.navbar-right a {
    color: white;
    text-decoration: none;
    padding: 8px 12px;
    background-color: #004d40;
    border-radius: 4px;
    transition: background-color 0.3s;
}

</style>
 
  </head>
  <body>


 
  

 @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif


  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="
    padding-top: 10px;">
 
  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style= "padding-left:20px; height: 460px;">
 
<div class="container" style="margin:27px;">
 
<div class="container" style="
    height: 421px;">
    <div class="section1" id="new">
        <div class="section-header1">
             <h2 cla>Main ground</h2>
        </div>
            <div class="card1-container" style="
    height: auto;
">
                <div class="container"style="padding-left: 0px;">
                    <div class=" ">
                         @forelse($bookings as $booking)
                            <div class="bg-green-300 rounded-lg ">
                                <div class="card1">
                            
                                    <h3><div class="  text-lg mb-">{{ \Carbon\Carbon::parse($booking->date)->format('l') }}</div></h3>
                                
                                    <p><strong>Sport:</strong> {{ $booking->sport }}</p>
                                    <p><strong>Time:</strong> {{ $booking->time }}</p>
                                    <p><strong>Captain:</strong> {{ $booking->booker_name }}</p>
                                
                                    <button 
                                        class="bg-green-600 text-white px-4 py-1 mt-2 rounded hover:bg-green-700"
                                        onclick="openBookingModal({{ $booking->id }})">
                                        Open
                                    </button>
                                
                                </div>
                            </div>
                         @empty
                           <div class="text-center text-gray-500">No bookings available.</div>
                        @endforelse
                    </div>
                </div>

            <!-- Repeat card block to create 7 cards per section -->
           
            <!-- Add more cards as needed -->
            <div class="card1"   >
                <h3>Monday</h3>
                <p><strong>Sport:</strong> Volleyball</p>
                <p><strong>Time:</strong> 4:00pm to 6:00pm</p>
                <p><strong>Captain:</strong>Prabhath</p>
                 <div class="actions">

                 <a href="#" class="actions" data-toggle="modal" data-target="#ModalCreate">
  
                    <button>Open</button> </a>
                </div>
            </div>
            <div class="card1">
                <h3>Tuesday</h3>
                <p><strong>Sport:</strong> Volleyball</p>
                <p><strong>Time:</strong> 4:00pm to 6:00pm</p>
                <p><strong>Captain:</strong>Prabhath</p>
                 <div class="actions">
                 <a href="#" class="actions" data-toggle="modal" data-target="#ModalCreate">

                    <button>Open</button>
                 </a>
                    
                </div>
            </div>
            <div class="card1">
                <h3>Wednesday</h3>
                <p><strong>Sport:</strong> Volleyball</p>
                <p><strong>Time:</strong> 4:00pm to 6:00pm</p>
                <p><strong>Captain:</strong>Prabhath</p>
                 <div class="actions">
                 <a href="#" class="actions" data-toggle="modal" data-target="#ModalCreate">

                    <button>Open</button>
                 </a>             
                </div>
            </div>
            <div class="card1">
                <h3>Thursday</h3>
                <p><strong>Sport:</strong> Volleyball</p>
                <p><strong>Time:</strong> 4:00pm to 6:00pm</p>
                <p><strong>Captain:</strong>Prabhath</p>
                  <div class="actions">
                  <a href="#" class="actions" data-toggle="modal" data-target="#ModalCreate">

                    <button>Open</button>
                    </a>              
                </div>
            </div>
            <div class="card1">
                <h3>Friday</h3>
                <p><strong>Sport:</strong> Volleyball</p>
                <p><strong>Time:</strong> 4:00pm to 6:00pm</p>
                <p><strong>Captain:</strong>Prabhath</p>
                  <div class="actions">
                  <a href="#" class="actions" data-toggle="modal" data-target="#ModalCreate">

                   <button>Open</button>
                    </a>
            
                </div>
            </div>

            <div class="card1">
                <h3>Saturday</h3>
                <p><strong>Sport:</strong> Volleyball</p>
                <p><strong>Time:</strong> 4:00pm to 6:00pm</p>
                <p><strong>Captain:</strong>Prabhath</p>
                  <div class="actions">
                  <a href="#" class="actions" data-toggle="modal" data-target="#ModalCreate">

                    <button>Open</button>
                    </a>        
                </div>
            </div>
            <div class="card1">
                <h3>Sunday</h3>
                 <p><strong>Sport:</strong> Volleyball</p>
                <p><strong>Time:</strong> 4:00pm to 6:00pm</p>
                <p><strong>Captain:</strong>Prabhath</p>
                <div class="actions">
                <a href="#" class="actions" data-toggle="modal" data-target="#ModalCreate">

                <button>Open</button>
                </a>               
                </div>
            </div>
        </div>
    </div>

    <div class="section2" id="open">
        <div class="section-header2">
            <h2>Indoor Stadium</h2>
        </div>
        <div class="card2-container"style="
    height: auto;
">
            <div class="card2">
                <h3>Ticket# 201255</h3>
                <p><strong>Complain:</strong> Financial</p>
                <p><strong>Description:</strong> Customer Care</p>
                <div class="actions">
                    <button>Open</button>
                    <button>Assign</button>
                    <button>Close</button>
                </div>
            </div>
            <div class="card2">
                <h3>Ticket# 201255</h3>
                <p><strong>Complain:</strong> Financial</p>
                <p><strong>Description:</strong> Customer Care</p>
                <div class="actions">
                    <button>Open</button>
                    <button>Assign</button>
                    <button>Close</button>
                </div>
            </div>
            <div class="card2">
                <h3>Ticket# 201255</h3>
                <p><strong>Complain:</strong> Financial</p>
                <p><strong>Description:</strong> Customer Care</p>
                <div class="actions">
                    <button>Open</button>
                    <button>Assign</button>
                    <button>Close</button>
                </div>
            </div>
            <div class="card2">
                <h3>Ticket# 201255</h3>
                <p><strong>Complain:</strong> Financial</p>
                <p><strong>Description:</strong> Customer Care</p>
                <div class="actions">
                    <button>Open</button>
                    <button>Assign</button>
                    <button>Close</button>
                </div>
            </div>
            <div class="card2">
                <h3>Ticket# 201255</h3>
                <p><strong>Complain:</strong> Financial</p>
                <p><strong>Description:</strong> Customer Care</p>
                <div class="actions">
                    <button>Open</button>
                    <button>Assign</button>
                    <button>Close</button>
                </div>
            </div>
            <div class="card2">
                <h3>Ticket# 201255</h3>
                <p><strong>Complain:</strong> Financial</p>
                <p><strong>Description:</strong> Customer Care</p>
                <div class="actions">
                    <button>Open</button>
                    <button>Assign</button>
                    <button>Close</button>
                </div>
            </div>
            <div class="card2">
                <h3>Ticket# 201255</h3>
                <p><strong>Complain:</strong> Financial</p>
                <p><strong>Description:</strong> Customer Care</p>
                <div class="actions">
                    <button>Open</button>
                    <button>Assign</button>
                    <button>Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="section3" id="overdue">
        <div class="section-header3">
            <h2>Pool</h2>
        </div>
        <div class="card3-container"style="
    height: auto;
">
            <div class="card3">
                <h3>Ticket# 201256</h3>
                <p><strong>Complain:</strong> Technical</p>
                <p><strong>Description:</strong> Financial</p>
                <div class="actions">
                    <button>Open</button>
                    <button>Assign</button>
                    <button>Close</button>
                </div>
            </div>

            <div class="card3">
                <h3>Ticket# 201256</h3>
                <p><strong>Complain:</strong> Technical</p>
                <p><strong>Description:</strong> Financial</p>
                <div class="actions">
                    <button>Open</button>
                    <button>Assign</button>
                    <button>Close</button>
                </div>
            </div>
            <div class="card3">
                <h3>Ticket# 201256</h3>
                <p><strong>Complain:</strong> Technical</p>
                <p><strong>Description:</strong> Financial</p>
                <div class="actions">
                    <button>Open</button>
                    <button>Assign</button>
                    <button>Close</button>
                </div>
            </div>
            <div class="card3">
                <h3>Ticket# 201256</h3>
                <p><strong>Complain:</strong> Technical</p>
                <p><strong>Description:</strong> Financial</p>
                <div class="actions">
                    <button>Open</button>
                    <button>Assign</button>
                    <button>Close</button>
                </div>
            </div>
            <div class="card3">
                <h3>Ticket# 201256</h3>
                <p><strong>Complain:</strong> Technical</p>
                <p><strong>Description:</strong> Financial</p>
                <div class="actions">
                    <button>Open</button>
                    <button>Assign</button>
                    <button>Close</button>
                </div>
            </div>
            <div class="card3">
                <h3>Ticket# 201256</h3>
                <p><strong>Complain:</strong> Technical</p>
                <p><strong>Description:</strong> Financial</p>
                <div class="actions">
                    <button>Open</button>
                    <button>Assign</button>
                    <button>Close</button>
                </div>
            </div>
            <div class="card3">
                <h3>Ticket# 201256</h3>
                <p><strong>Complain:</strong> Technical</p>
                <p><strong>Description:</strong> Financial</p>
                <div class="actions">
                    <button>Open</button>
                    <button>Assign</button>
                    <button>Close</button>
                </div>
            </div>
            <div class="card3">
                <h3>Ticket# 201256</h3>
                <p><strong>Complain:</strong> Technical</p>
                <p><strong>Description:</strong> Financial</p>
                <div class="actions">
                    <button>Open</button>
                    <button>Assign</button>
                    <button>Close</button>
                </div>
            </div>
            <div class="card3">
                <h3>Ticket# 201256</h3>
                <p><strong>Complain:</strong> Technical</p>
                <p><strong>Description:</strong> Financial</p>
                <div class="actions">
                    <button>Open</button>
                    <button>Assign</button>
                    <button>Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="section4" id="closed">
        <div class="section-header4">
            <h2>Special </h2>
        </div>
       
        <div class="card4-container">
            <div class=" ">
            <div class="container" style="padding-left: 0px;height:auto">
                    <div class=" ">
                         @forelse($bookings as $booking)
                            <div class="bg-green-300 rounded-lg ">
                                <div class="card4">
                            
                                    <h3><div class=" text-lg">{{ \Carbon\Carbon::parse($booking->date)->format('l') }}</div></h3>
                                    <p><strong>Date:</strong> {{ $booking->date }}</p>
                                    <p><strong>Time:</strong> {{ $booking->time }}</p> 
                                    <p><strong>Sport:</strong> {{ $booking->sport }}</p>
                                    <p><strong>Ground:</strong> {{ $booking->place }}</p>
                                    <p><strong>Booker Name:</strong> {{ $booking->booker_name }}</p>
                                
 

                                
                                </div>
                            </div>
                         @empty
                           <div class="text-center text-gray-500">No bookings available.</div>
                        @endforelse
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</div>
</div>
</div>
 

 
 
<div><br>
<!-- Booking Modal -->
<div id="bookingModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg w-1/3 p-6">
        <h2 class="text-xl font-bold mb-4 text-gray-800">Place Your Booking</h2>
        <form wire:submit.prevent="store" enctype="multipart/form-data">
            <!-- Left Section: First Half of Input Fields -->
            <div class="flex justify-between space-x-4">
                <div class="w-1/2">
                    <div class="mb-4">
                        <label for="booker_name" class="block text-sm font-bold mb-2">Name of Booker:</label>
                        <input type="text" id="booker_name" wire:model="booker_name" class="w-full border-green-300 rounded shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="contact_number" class="block text-sm font-bold mb-2">Contact Number:</label>
                        <input type="text" id="contact_number" wire:model="contact_number" class="w-full border-green-300 rounded shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="date" class="block text-sm font-bold mb-2">Date:</label>
                        <input type="date" id="date" wire:model="date" class="w-full border-green-300 rounded shadow-sm" required>
                    </div>
                </div>

                <!-- Right Section: Second Half of Input Fields and Button -->
                <div class="w-1/2">
                    <div class="mb-4">
                        <label for="time" class="block text-sm font-bold mb-2">Time:</label>
                        <input type="time" id="time" wire:model="time" class="w-full border-green-300 rounded shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="place" class="block text-sm font-bold mb-2">Place:</label>
                        <select id="place" wire:model="place" class="w-full border-green-300 rounded shadow-sm" required>
                            <option value="" disabled selected>Select a place</option>
                            <option value="Main Ground">Main Ground</option>
                            <option value="Indoor Stadium">Indoor Stadium</option>
                            <option value="Pool">Pool</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="sport" class="block text-sm font-bold mb-2">Sport:</label>
                        <input type="text" id="sport" wire:model="sport" class="w-full border-green-300 rounded shadow-sm" required>
                    </div>
                </div>
            </div>

            <!-- Submit and Cancel Buttons -->
            <div class="flex justify-end">
                <button type="button" onclick="closeBookingModal()" class="px-4 py-2 bg-gray-500 text-white rounded-lg mr-2">Cancel</button>
                <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-lg">Book Ground</button>
            </div>
        </form>
    </div>
</div>

<!-- Button to Open Booking Modal -->
<div class="flex justify-end" style="padding-top: 10px;">
    <button 
        class="bg-green-500 text-white py-2 px-6 rounded-lg hover:bg-orange-600 shadow-md transition duration-200" 
        onclick="openBookingModal()">
        Place your Booking
    </button>
</div>

<!-- JavaScript to Handle Modal Open/Close -->
<script>
    function openBookingModal() {
        document.getElementById('bookingModal').classList.remove('hidden');
    }

    function closeBookingModal() {
        document.getElementById('bookingModal').classList.add('hidden');
    }
</script>
@livewireScripts
<script src="{{ asset('vendor/livewire-ui/modal.js') }}"></script>
  </body>

  @include('athlete.modal.register')

  
    </html>
    
</layout>
