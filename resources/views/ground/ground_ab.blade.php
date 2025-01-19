
<x-app-layout>
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


 
<br>



  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style= padding-left:20px; >
    
<div class="container" style="margin:27px;">
 

<div class="container">
    <div class="section1" id="new">
        <div class="section-header1">
             <h2>Main ground</h2>
           
        </div>
        <div class="card1-container">
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
        <div class="card2-container">
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
        <div class="card3-container">
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
            <div class="card4">
                <h3>Ticket# 201257</h3>
                <p><strong>Complain:</strong> Customer Care</p>
                <p><strong>Description:</strong> Customer Service</p>
                <div class="actions">
                    <button>Open</button>
                    <button>Assign</button>
                    <button>Close</button>
                </div>
            </div>
            <div class="card4">
                <h3>Ticket# 201257</h3>
                <p><strong>Complain:</strong> Customer Care</p>
                <p><strong>Description:</strong> Customer Service</p>
                <div class="actions">
                    <button>Open</button>
                    <button>Assign</button>
                    <button>Close</button>
                </div>
            </div>
            <div class="card4">
                <h3>Ticket# 201257</h3>
                <p><strong>Complain:</strong> Customer Care</p>
                <p><strong>Description:</strong> Customer Service</p>
                <div class="actions">
                    <button>Open</button>
                    <button>Assign</button>
                    <button>Close</button>
                </div>
            </div>
            <div class="card4">
                <h3>Ticket# 201257</h3>
                <p><strong>Complain:</strong> Customer Care</p>
                <p><strong>Description:</strong> Customer Service</p>
                <div class="actions">
                    <button>Open</button>
                    <button>Assign</button>
                    <button>Close</button>
                </div>
            </div>
            <div class="card4">
                <h3>Ticket# 201257</h3>
                <p><strong>Complain:</strong> Customer Care</p>
                <p><strong>Description:</strong> Customer Service</p>
                <div class="actions">
                    <button>Open</button>
                    <button>Assign</button>
                    <button>Close</button>
                </div>
            </div>
            
        </div>
    </div>
</div>
</div>
</div>

  </body>

  @include('athlete.modal.register')

  
    </html>
    
</x-app-layout>
