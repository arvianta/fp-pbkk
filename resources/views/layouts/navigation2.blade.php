<nav x-data="{ open: false }" class="bg-light1 border-b sticky top-0 z-20">
    <!-- Primary Navigation Menu -->
    <div class="max-w-full py-1 mx-auto px-4 sm:px-6 lg:px-8 border-b border-gray-300">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a>
                    <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="23.5" cy="23.5" r="23.5" fill="#A1F75E"/>
                        <path d="M15.5693 14.2148C14.4205 14.2148 13.4868 15.1486 13.4868 16.2973V18.1587C13.4868 17.0099 12.5592 16.0823 11.4104 16.0823C10.2617 16.0823 9.32794 17.0099 9.32794 18.1587V28.8476C9.32794 29.9964 10.2617 30.924 11.4104 30.924C12.5592 30.924 13.4868 29.9902 13.4868 28.8476V30.7089C13.4868 31.8577 14.4205 32.7853 15.5693 32.7853C16.718 32.7853 17.6456 31.8577 17.6456 30.7089V16.2973C17.6518 15.1486 16.718 14.2148 15.5693 14.2148ZM10.5136 18.945C10.575 22.9687 10.4644 23.2144 10.0958 23.2144C9.77024 23.2144 9.77024 21.9858 9.77024 18.945C9.77024 17.2495 10.3968 16.9608 10.5688 17.0652C10.7777 17.2004 10.489 17.2495 10.5136 18.945ZM14.783 17.0406C14.8444 21.0644 14.74 21.3101 14.3652 21.3101C14.0397 21.3101 14.0397 20.0815 14.0397 17.0406C14.0397 15.3452 14.6663 15.0564 14.8383 15.1609C15.041 15.2899 14.7584 15.339 14.783 17.0406Z" fill="#1D2229"/>
                        <path d="M18.1985 21.6111V25.3829H28.8014V21.6111H18.1985Z" fill="#1D2229"/>
                        <path d="M8.78121 21.6111H6.625V25.3829H8.78121V21.6111Z" fill="#1D2229"/>
                        <path d="M40.3749 21.6111H38.2187V25.3829H40.3749V21.6111Z" fill="#1D2229"/>
                        <path d="M35.5895 16.0762C34.4408 16.0762 33.5132 17.0038 33.5132 18.1525V16.2973C33.5132 15.1486 32.5794 14.2148 31.4307 14.2148C30.2819 14.2148 29.3543 15.1486 29.3543 16.2973V30.7089C29.3543 31.8577 30.2819 32.7853 31.4307 32.7853C32.5794 32.7853 33.5132 31.8577 33.5132 30.7089V28.8476C33.5132 29.9964 34.4469 30.924 35.5895 30.924C36.7383 30.924 37.6659 29.9902 37.6659 28.8476V18.1525C37.672 17.0038 36.7383 16.0762 35.5895 16.0762ZM30.6013 17.0406C30.6628 21.0644 30.5522 21.3101 30.1836 21.3101C29.858 21.3101 29.858 20.0815 29.858 17.0406C29.858 15.3452 30.4846 15.0564 30.6566 15.1609C30.8655 15.2899 30.5768 15.339 30.6013 17.0406ZM34.6496 18.945C34.711 22.9687 34.6005 23.2144 34.2319 23.2144C33.9063 23.2144 33.9063 21.9858 33.9063 18.945C33.9063 17.2495 34.5329 16.9608 34.7049 17.0652C34.9076 17.2004 34.625 17.2495 34.6496 18.945Z" fill="#1D2229"/>
                    </svg>
                    
                    </a>
                    <h1 class="text-2xl font-extrabold text-dark3 mx-2">FitHub</h1>
                </div>
            </div>
  
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- admin nav -->
                @if (Route::has('login'))
                    <div class="hidden space-x-3 sm:-my-px sm:ml-4 h-16 sm:flex justify-end">
                        @auth
                        @if(Auth::user()->role_id == 1)
                            <x-admin-nav-link :href="route('dashboard.admin')" :active="request()->routeIs('admin.*') || request()->routeIs('dashboard.admin')">
                                {{ __('Dashboard') }}
                            </x-admin-nav-link>
                        @endif
                        @if(Auth::user()->role_id == 2)
                            <x-admin-nav-link :href="route('dashboard.user')" :active="request()->routeIs('user.*') || request()->routeIs('dashboard.user')">
                                {{ __('Dashboard') }}
                            </x-admin-nav-link>
                        @endif
                    </div>
                    <!-- Notifications -->
                    <button type="button" data-dropdown-offset-skidding="-48" data-dropdown-toggle="notification-dropdown" class="sm:mx-4 p-2 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100   ">
                        <span class="sr-only">View notifications</span>
                        <!-- Bell icon -->
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div class="z-40 hidden max-w-sm my-4 overflow-hidden text-base list-none bg-white divide-y divide-gray-100 rounded shadow-lg  " id="notification-dropdown">
                        <div class="block px-4 py-2 text-base font-medium text-center text-gray-700 bg-gray-50  ">
                            Notifications
                        </div>
                        <div>
                        <a href="#" class="flex px-4 py-3 border-b hover:bg-gray-100">
                            <div class="w-full pl-3">
                                <div class="text-gray-500 font-normal text-sm mb-1.5 ">New message from <span class="font-semibold text-gray-900 ">Bonnie Green</span>: "Hey, what's up? All set for the presentation?"</div>
                                <div class="text-xs font-medium text-primary-700 ">a few moments ago</div>
                            </div>
                        </a>
                        </div>
                        <a href="#" class="block py-2 text-base font-normal text-center text-gray-900 bg-gray-50 hover:bg-gray-100   ">
                            <div class="inline-flex items-center ">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                            View all
                            </div>
                        </a>
                    </div>

                    <!-- Settings Dropdown -->
                    <div class="flex items-center z-10">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-gray-300 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    @if(Auth::user()->profile_picture)
                                        <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile Picture" class="rounded-full w-7 h-7 mr-3">
                                    @else
                                        <img src="{{ asset('img/default.png') }}" alt="Profile Picture" class="rounded-full w-7 h-7 mr-3">
                                    @endif
                                    <div>{{ Auth::user()->name }}</div>
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 mt-5 hover:text-gray-900">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-8 font-semibold mt-5 text-gray-600 hover:text-gray-900">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
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
    @auth
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            @if(Auth::user()->role_id == 1)
            <x-responsive-nav-link :href="route('dashboard.admin')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            @elseif(Auth::user()->role_id == 2)
            <x-responsive-nav-link :href="route('dashboard.user')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            @endif    
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 ">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 ">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
    @endauth
</nav>


