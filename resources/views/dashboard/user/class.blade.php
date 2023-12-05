<x-app-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <div>
        @include('dashboard.user.sidebar')
        <div class="">
            <div class="p-4 my-6 w-10/12 float-right">
                <div class="sm:px-6 mx-4"> 
                    <!-- active classes -->
                    <div class="pb-6 pt-2">
                        <div class="flex items-center mb-6 justify-between">
                            <h2 class="text-lg font-extrabold text-dark3 inline-block px-3 py-1 bg-primary rounded-lg">Active Classes</h2>
                        </div>
                        <!-- cards -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                            @if($activeClasses->isEmpty())
                                <p class="text-gray-500 h-24">None active classes</p>
                            @else
                            @foreach($activeClasses as $activeClass)
                                <div class="mx-auto w-80 transform overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-lg">
                                    <img class="h-48 w-full object-cover object-center" src="https://source.unsplash.com/random/900x700/?gym/{{ $activeClass->id }}" alt="Product Image" />
                                    <div class="p-4">
                                        <div class="flex items-center mb-2 justify-between">
                                            <h2 class="mr-2 text-lg font-medium text-gray-900">{{ $activeClass->name }}</h2>
                                            <span class="inline-block px-2 py-1 text-xs font-semibold text-gray-700 bg-gray-200 rounded-full">{{ $activeClass->day }} {{ $activeClass->time }}</span>
                                        </div>
                                        <p class="mb-2 text-base text-gray-700 truncate">{{ substr($activeClass->description, 0, 50) }}</p>
                                        <div class="flex items-center">
                                            <p class="mr-2 text-lg font-semibold text-gray-900 ">{{ $activeClass->duration }}</p>
                                            <p class="text-base font-medium text-gray-500 line-through "> duration</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @endif
                        </div>
                    </div>

                    <!-- available classes -->
                    <div>
                        <div class="flex items-center mb-6 justify-between">
                            <h2 class="text-lg font-extrabold text-dark3 inline-block px-3 py-1 bg-gray-300 rounded-lg">Available Workout Classes</h2>
                            <a herf="#" class="px-2 py-1 text-base font-semibold text-blue-700">see all >></a>
                        </div>
                        <!-- cards -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                            @foreach($classes as $class)
                                <!-- Modal toggle -->
                                <button data-modal-target="static-modal" data-modal-index="{{ $class->id }}" data-modal-toggle="static-modal" class="mx-auto w-80 transform overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-lg text-left" type="button">
                                    <img class="h-48 w-full object-cover object-center" src="https://source.unsplash.com/random/900x700/?gym/{{ $class->id }}" alt="Product Image" />
                                    <div class="p-4">
                                        <div class="flex items-center mb-2 justify-between">
                                            <h2 class="mr-2 text-lg font-medium text-gray-900">{{ $class->name }}</h2>
                                            <span class="inline-block px-2 py-1 text-xs font-semibold text-gray-700 bg-gray-200 rounded-full">
                                                {{ $class->day }} 
                                                <?php
                                                    $formatted_time = date('H.i', strtotime($class->time));
                                                    echo $formatted_time;
                                                ?>
                                            </span>
                                        </div>
                                        <p class="mb-2 text-base text-gray-700 truncate">{{ substr($class->description, 0, 50) }}</p>
                                        <div class="flex items-center justify-between">
                                            <p class="mr-2 text-lg font-semibold text-gray-900 ">
                                                <?php
                                                    // Format the duration from HH:MM:SS to Xh Xm
                                                    $duration = $class->duration;
                                                    $duration_parts = explode(':', $duration);
                                                    $formatted_duration = sprintf('%dh %dm', $duration_parts[0], $duration_parts[1]);
                                                    echo $formatted_duration;
                                                ?>
                                            </p>
                                            <p class="text-base font-medium text-gray-500">{{ $class->capacity }} Capacity</p>
                                        </div>
                                    </div>
                                </button>
                                <!-- Main modal -->
                                <div id="static-modal-{{ $class->id }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden fixed z-50 justify-center bg-gray-800/60 items-center md:inset-0 max-h-full">
                                    <div class="relative p-4 w-full max-h-full mt-28">
                                        <!-- Modal content -->
                                        <div class="flex justify-center">
                                            <div class="bg-white rounded-2xl overflow-hidden shadow-md w-1/3">
                                                <img src="{{ asset('img/banner.png') }}" alt="" class="h-24 w-full"/>
                                                <div class="flex flex-col items-center justify-center gap-6 p-6 md:p-10">
                                                <h1 class="text-md md:text-xl font-extrabold">Order Summary</h1>
                                                <p class="text-center text-gray-400">
                                                    You can now listen to millions of songs, audiobooks, and podcasts on
                                                    any device anywhere you like!
                                                </p>
                                                <div class="flex items-center justify-between bg-gray-200 p-4 w-full rounded-xl">
                                                    <div class="flex items-center gap-5">
                                                    <img src="https://source.unsplash.com/random/50x50/?gym/2" alt="" class="rounded-full"/>
                                                    <div class="space-y-1 text-sm">
                                                        <p class="font-bold">Annual Plan</p>
                                                        <p class="text-gray-400">$59.99/year</p>
                                                    </div>
                                                    </div>
                                                    <a href="#" class="text-sm font-bold text-dark3 hover:text-dark3 hover:no-underline underline transition-all duration-300">
                                                        Change
                                                    </a>
                                                </div>
                                                <button data-modal-hide="static-modal-{{ $class->id }}" type="button" class="bg-primary/80 hover:bg-primary text-dark2 hover:text-dark3 py-3 w-full font-bold rounded-xl shadow-md transition-all duration-300">
                                                    Proceed to Payment
                                                </button>
                                                <button data-modal-hide="static-modal-{{ $class->id }}" type="button" class="text-gray-500 hover:text-gray-800 font-bold transition-all duration-300">
                                                    Cancel Order
                                                </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
