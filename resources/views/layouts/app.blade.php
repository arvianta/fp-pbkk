<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('img/logo_fithub.png') }}" type="image/x-icon">
        
        <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
        <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <title>{{ $title ?? config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/charts.js'])

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script>

            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('52e1213118b62862af18', {
            cluster: 'ap1'
            });

            var channel = pusher.subscribe('popup-channel');
            channel.bind('user-register', function(data) {
                if(data.name != null){
                    toastr.success(data.name);
                    $.ajax({
                        url: "{{ route('create.notification') }}",
                        method: 'POST',
                        data: {
                            _token: "{{ csrf_token() }}",
                            message: data.name,
                        },
                        success: function(data) {
                            console.log(data);
                        }
                    });
                }
            });
        </script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-light1">
            <!-- Navigation -->
            @if(request()->is('admin/*') || request()->is('dashboard/*') || request()->is('profile') || request()->is('user/*')) 
                @include('layouts.navigation2')
            @else
                @include('layouts.navigation')
            @endif


            <!-- Banner Section -->
            @if(request()->is('homepage') || request()->is('admin/*') || request()->is('dashboard/*') || request()->is('profile') || request()->is('/') || request()->is('user/*')) 
                <!-- None -->
            @else
                @php
                    $randomNumber = mt_rand(1, 10);
                @endphp
                <section class="bg-center bg-no-repeat bg-cover py-16" style="background-image: url({{ asset('img/banner' . $randomNumber . '.png') }});">
                    <div class="px-4 mx-auto max-w-screen-xl text-center py-10 lg:py-16">
                        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-light1 md:text-5xl lg:text-7xl">{{ $title ?? 'FitHub' }}</h1>
                    </div>
                </section>
            @endif

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Alert -->
            @if(Session::get('status') != null)
            <div id="alert-1" class="z-50 flex items-center justify-center p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 md:px-6 mx-auto max-w-md" role="alert" style="position: fixed; top: 20px; right: 0; left: 0;">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 mr-6 text-sm font-medium">
                    {{ \Illuminate\Support\Facades\Session::get('status') }}
                </div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 " data-dismiss-target="#alert-1" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
            @endisset
            @if($errors->any())
            <div id="alert-1" class="z-50 flex items-center justify-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 md:px-6 mx-auto max-w-md" role="alert" style="position: fixed; top: 20px; right: 0; left: 0;">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 a9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium">
                    @foreach($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 " data-dismiss-target="#alert-1" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
            @endif

            @yield('content')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <!-- Footer -->
            @if(request()->is('dashboard/*') || request()->is('admin/*') || request()->is('profile') || request()->is('user/*'))
                <!-- None -->
            @else
                @include('layouts.footer')
            @endif

        </div>
    </body>
</html>

<style>
    #alert-1 {
        transition: opacity 1s ease-in-out;
    }

    #alert-1.fade-out {
        opacity: 0;
    }
</style>

<script>
    function dismissAlert(event) {
        event.preventDefault();
        const target = event.target.closest('[data-dismiss-target]');
        const dismissTarget = document.querySelector(target.dataset.dismissTarget);
        dismissTarget.remove();
    }

    const dismissButtons = document.querySelectorAll('[data-dismiss-target]');
    dismissButtons.forEach(button => {
        button.addEventListener('click', dismissAlert);
    });

    const alertElement = document.querySelector('#alert-1');
    setTimeout(() => {
        alertElement.classList.add('fade-out');
        setTimeout(() => {
            alertElement.remove();
        }, 1000);
    }, 3000);
</script>

