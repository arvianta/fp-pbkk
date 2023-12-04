<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js',  'resources/js/charts.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 ">
            <div class="shrink-0 flex items-center">
                <a href="/">
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

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>

            @if(request()->is('login'))
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    <p class="text-center text-sm text-gray-600">
                        Don't have an account? <a href="{{ route('register') }}" class="font-medium text-blue-400 hover:text-blue-600">{{ __('Register') }}</a>
                    </p>
                </div>
            @else
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    <p class="text-center text-sm text-gray-600">
                        Already have an account? <a href="{{ route('login') }}" class="font-medium text-blue-400 hover:text-blue-600">{{ __('Login') }}</a>
                    </p>
                </div>
            @endif
        </div>
    </body>
</html>
