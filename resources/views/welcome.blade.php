<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <style type="text/css">
        twelve h1 {
            font-size: 26px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            width: 160px;
            text-align: center;
            margin: auto;
            white-space: nowrap;
            padding-bottom: 13px;
        }

        .twelve h1:before {
            background-color: #007bff;
            content: '';
            display: block;
            height: 3px;
            width: 75px;
            margin-bottom: 5px;
        }


        .alert {
            padding: 10px;
            background-color: #f44336;
            color: white;
            opacity: 0.7;
            transition: opacity 0.6s;
            margin-bottom: 2px;
        }

        .alert.success {
            background-color: #04AA6D;
        }

        .alert.info {
            background-color: #2196F3;
        }

        .alert.warning {
            background-color: #f05951;
        }

        .closebtn {
            margin-left: 2px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }
    </style>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
            /* Container styling */
            .navbar {
                background-color:white;
                color: black;
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 10px;
                position: sticky;
                top: 0;
                z-index: 1;
            }

            /* Logo styling */
            .navbar .logo {
                display: flex;
                align-items: center;
                text-decoration: none;
                color: white;
            }

            .navbar .logo img {
                height: 40px;
                width: 32px;
                margin-left: 10px;
                margin-right: 12px;
            }

            /* Title styling */
            .navbar .title {
                font-size: 24px;
                font-weight: bold;
            }

            /* User info and logout styling */
            .navbar .user-info {
                display: flex;
                align-items: center;
                gap: 15px;
            }

            .navbar .user-info a {
                color: white;
                text-decoration: none;
                font-weight: bold;
            }

            .navbar .user-info a:hover {
                text-decoration: underline;
            }

            .a {
                color: white;
            }

            .body {
                background-color: #f4f4f9
            }

            .span{
                color: black;
            }
        </style>
    </head>

<body class="body">

    <!-- Navbar -->
    <div class="navbar">
        <!-- Logo with link -->
        <a href="https://www.rjt.ac.lk/" class="logo">
            <img src="images/logo.png" alt="Logo">
           <span class="span">Rajatata University of Sri Lanka</span>
        </a>

        <!-- Title -->


        <!-- User Info and Logout -->
        <div class="user-info">
            <span>Welcome!</span>
        </div>
    </div>

    <title>user_login</title>
    </head>

    <body class="body">


        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex align-items-center justify-content-center h-100">
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <p style="text-align: center;" class="h1">RUSL Sportsmen</p>
                        <img style="width: 100%" src="{{ asset('images/log.png') }}"
                            class="img-fluid" alt="Phone image">
                    </div>
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                        <form action="{{ route('login') }}" method="POST">

                            <!-- User Heading -->

                            <div class="twelve">
                                <h1>User Login</h1>
                            </div>


                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />







                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email Address -->
                                <div class="form-outline mb-4">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" />

                                    <x-text-input id="password" class="form-control form-control-lg"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <div class="d-flex justify-content-around align-items-center mb-4">

                                    <br>
                                    <br>
                                    <br>

                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                        <label class="form-check-label" for="form1Example3"> Remember me </label>
                                    </div>
                                    <a href="#!">Forgot password?</a>
                                </div>


                                <!--  Registration Part-->


                                <!-- <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? 
        <a href="{{ route('register') }}"
            style="color: #393f81;">Register here</a> -->



                                <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"> -->
                                @if (Route::has('login'))
                                <!-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> -->
                                @auth


                                <div class="flex items-center justify-end mt-4">
                                    <a>
                                        <x-primary-button class="btn btn-primary btn-lg btn-block">
                                            <a href="{{ url('dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500" style="color: white;">Dashboard</a>
                                        </x-primary-button>
                                    </a>
                                </div>

                                <!-- 
                    <div class="flex items-center justify-end mt-4">
                        <a><x-primary-button class="btn btn-primary btn-lg btn-block" href="{{ url('dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        </x-primary-button>
                        -->
                                <!--               
                           
                <div class="flex items-center justify-end mt-4">
            
                     <x-primary-button class="btn btn-primary btn-lg btn-block">
                          {{ __('Log in') }}
                     </x-primary-button>
                 </div> -->

                                @else


                                <!-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> -->

                                <div class="flex items-center justify-end mt-4">
                                    <a>
                                        <x-primary-button class="btn btn-primary btn-lg btn-block">
                                            <a href="{{ __('Log in') }}" class="text-sm text-gray-700 dark:text-gray-500" style="color: white;">Log in</a>
                                        </x-primary-button>
                                    </a>
                                </div>

                                <br>
                                <br>


                                @if (Route::has('register'))

                                <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account?
                                    <a href="{{ route('register') }}"
                                        style="color: #393f81;">Register here</a>
                                    <!-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a> -->
                                    @endif
                                    @endauth
                    </div>
                    @endif


                </div>


                <!-- <br>
        <div class="flex items-center justify-end mt-4">
            
            <x-primary-button class="btn btn-primary btn-lg btn-block">
             {{ __('Log in') }}
            </x-primary-button>
        </div> -->
                </form>
            </div>
        </section>
    </body>
</html>