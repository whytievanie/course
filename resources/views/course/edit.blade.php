<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="5odz3CbfKsVt4BrqZz3NjYSBeG1s62ItgoLtL69s">

        <title>Optionalpartregistration</title>

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">

        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

        <!-- Livewire Styles -->
        
        <style>
            [wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid] {
                display: none;
            }

            [wire\:offline] {
                display: none;
            }

            [wire\:dirty]:not(textarea):not(input):not(select) {
                display: none;
            }

            input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {
                animation-duration: 50000s;
                animation-name: livewireautofill;
            }

            @keyframes livewireautofill { from {} }
        </style>

        <!-- Scripts -->
        <script src="/js/app.js" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <nav wire:id="niUh22ih0LinmOgElkZt" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;niUh22ih0LinmOgElkZt&quot;,&quot;name&quot;:&quot;navigation-dropdown&quot;,&quot;locale&quot;:&quot;en&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[&quot;refresh-navigation-dropdown&quot;]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;905b3f6d&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;e2ce9490ad37a3424a0d166976d79e45727ee270ed849060b677de41d69e3004&quot;}}" x-data="{ open: false }" class="bg-white border-b border-gray-100">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">
                        <a href="http://localhost:8000/dashboard">
                            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="block h-9 w-auto">
                                <path d="M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z" fill="#6875F5"/>
                                <path d="M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z" fill="#6875F5"/>
                            </svg>
                        </a>
                    </div>
                    
                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <a class="inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out homebutton" href="http://localhost:8000/dashboard">
                            Home
                        </a>
                    
                        <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out homebutton" href="http://localhost:8000/course">
                            Keuzedeel
                        </a>

                        <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out homebutton" href="http://localhost:8000/education">
                            Opleiding
                        </a>

                        <x-jet-nav-link href="{{ route('admin.changeadminrolepage') }}" :active="request()->routeIs('admin.changeadminrolepage')"
                            class="homebutton">
                            {{ __('De beheerdersrol geven aan een docent') }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('course.educationcourseindex') }}" :active="request()->routeIs('course.educationcourseindex')"
                            class="homebutton">
                            {{ __('Een keuzedeel koppelen aan een of meerdere opleidingen') }}
                        </x-jet-nav-link>
                    </div>
                </div>
                
                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <div class="relative" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
                        <div @click="open = ! open">
                            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>admin</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                        
                        <div x-show="open"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute z-50 mt-2 w-48 rounded-md shadow-lg origin-top-right right-0"
                        style="display: none;"
                        @click="open = false">
                        
                            <div class="rounded-md shadow-xs py-1 bg-white">
                            
                            <!-- Account Management -->
                            
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                Manage Account
                            </div>
                            
                            <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out profilebutton" href="http://localhost:8000/user/profile">Profile</a>
                            
                            <div class="border-t border-gray-100"></div>
                            
                            <!-- Team Management -->
                            
                            <!-- Authentication -->
                            
                            <form method="POST" action="http://localhost:8000/logout">
                                <input type="hidden" name="_token" value="5odz3CbfKsVt4BrqZz3NjYSBeG1s62ItgoLtL69s">
                                    <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out profilebutton" href="http://localhost:8000/logout" onclick="event.preventDefault();
                                        this.closest('form').submit();">Logout
                                    </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a class="block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out" href="http://localhost:8000/dashboard">
                Dashboard
            </a>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=admin&amp;color=7F9CF5&amp;background=EBF4FF" alt="admin" />
                </div>

                <div class="ml-3">
                    <div class="font-medium text-base text-gray-800">admin</div>
                    <div class="font-medium text-sm text-gray-500">admin@curio.nl</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <a class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out" href="http://localhost:8000/user/profile">
                    Profile
                </a>
 
                <!-- Authentication -->
                <form method="POST" action="http://localhost:8000/logout">
                    <input type="hidden" name="_token" value="5odz3CbfKsVt4BrqZz3NjYSBeG1s62ItgoLtL69s">
                    <a class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out" href="http://localhost:8000/logout" onclick="event.preventDefault();
                    this.closest('form').submit();">
                        Logout
                    </a>
 
                </form>

                <!-- Team Management -->
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Een keuzedeel aanpassen
            </h2>
        </div>
    </header>
    
    <!-- Page Content -->
    <main>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h2 class="optionalparth2">Op deze pagina kan u deze keuzedeel aanpassen.</h2>
                        <form action="{{ route('course.update', $course->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="formgroupone">
                                <label for="name">Naam keuzedeel</label>
                            </div>
                            <div>
                                <input type="text" name="name" value="{{ $course->name }}" class="inputform" placeholder="Name">
                            </div>
                            <div class="formgroupone">
                                <label for="numberofsbu">Aantal SBU</label>
                            </div>
                            <div>
                                <input type="number" name="SBU" value="{{ $course->SBU }}" class="inputform" placeholder="Aantal SBU">
                            </div>
                            <div class="formgroupone">
                                <label for="user_id">Naam docent</label>
                            </div>
                            <div>
                            <select name="user_id" class="inputform">
                                @foreach(\App\Models\User::select('name', 'id')->where('role_id', '2')->get() as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            </div>
                            <div class="formgroupone">
                                <label for="description">Beschrijving</label>
                            </div>
                            <div>
                                <textarea class="textareaform" id="description" name="description" rows="4" cols="50">{{ $course->description }}</textarea>
                            </div>
                            <div>
                                <button type="submit" class="buttonform">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    </body>
</html>