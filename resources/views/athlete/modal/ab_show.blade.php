<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <!-- Modal Trigger Button -->

    <!-- Modal -->
    <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h5 class="modal-title text-sm font-semibold">Registration Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-3">

                
                    <!-- Form -->
                   
                    <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                   
               <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <!-- Left Column -->
                             <!-- Name -->

                             @csrf
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            

                            <!-- Faculty -->
                            <div>
                                <x-input-label for="name" :value="__('Faculty')" />
                                <select id="faculty" name="faculty" class="form-control form-control-sm">
                                                        <option value="admin">Management</option>
                                                        <option value="Social">Social </option>
                                                        <option value="user">Tech</option>
                                                        <option value="user">Applide</option>
                                                        <option value="user">aggry</option>
                                                        <option value="user">medicin</option>

                                                    </select>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                
                            </div>
                                      
                            
                                <!-- Reg No -->
                                <div class="mt-4">
                                <x-input-label for="regno" :value="__('Register Number')" />
                                <x-text-input id="regno" class="block mt-1 w-full" type="text" name="regno" :value="old('regno')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('regno')" class="mt-2" />
                            </div>
                                
                                <!-- Email -->
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
 

                            <!-- mobile -->
                            <div class="mt-4">
                                <x-input-label for="mobile" :value="__('mobile')" />
                                <x-text-input id="mobile" class="block mt-1 w-full" type="text" name="mobile" :value="old('mobile')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                            </div>

                               <!-- Sport -->
                               <div class="mt-4">
                                <x-input-label for="Sport" :value="__('sport')" />
                                <x-text-input id="sport" class="block mt-1 w-full" type="text" name="sport" :value="old('sport')"   />
                                <x-input-error :messages="$errors->get('sport')" class="mt-2" />
                            </div> 
                            
                                        
                        
                        </div>


           <div class="flex items-center justify-end mt-4">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>



            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>                        
        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
