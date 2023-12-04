<x-app-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <div>
        @include('dashboard.user.sidebar')
        <div class="p-4 sm:ml-64 my-6">
            <div class="">
                <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 ml-5">
                    <div class="bg-white rounded-2xl overflow-hidden shadow-md w-1/3">
                        <img src="https://source.unsplash.com/random/900x100/?product/1" alt="" class="h-24" />
                        <div class="flex flex-col items-center justify-center gap-6 p-6 md:p-10">
                        <h1 class="text-md md:text-xl font-extrabold">Order Summary</h1>

                        <p class="text-center text-gray-400">
                            You can now listen to millions of songs, audiobooks, and podcasts on
                            any device anywhere you like!
                        </p>

                        <div class="flex items-center justify-between bg-gray-200 p-4 w-full rounded-xl">
                            <div class="flex items-center gap-5">
                            <img src="https://source.unsplash.com/random/50x50/?product/2" alt="" class="rounded-full"/>

                            <div class="space-y-1 text-sm">
                                <p class="font-bold">Annual Plan</p>
                                <p class="text-gray-400">$59.99/year</p>
                            </div>
                            </div>

                            <a href="#" class="text-sm font-bold text-dark3 hover:text-dark3 hover:no-underline underline transition-all duration-300">
                                Change
                            </a>
                        </div>

                        <button class="bg-primary/80 hover:bg-primary text-dark2 hover:text-dark3 py-3 w-full font-bold rounded-xl shadow-md transition-all duration-300">
                            Proceed to Payment
                        </button>

                        <button class="text-gray-500 hover:text-gray-800 font-bold transition-all duration-300">
                            Cancel Order
                        </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>




<!-- Modal toggle -->
<button data-modal-target="static-modal" data-modal-toggle="static-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center   " type="button">
  Toggle modal
</button>

<div id="static-modal-{{ $i }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden fixed z-50 justify-center bg-gray-800/60 items-center md:inset-0 max-h-full">
    <div class="relative p-4 w-full max-h-full mt-28">
        <!-- Modal content -->
        <div class="flex justify-center">
            <div class="bg-white rounded-2xl overflow-hidden shadow-md w-1/3">
                <img src="https://source.unsplash.com/random/900x700/?product/{{ $i }}" alt="" class="h-24 w-full"/>
                <div class="flex flex-col items-center justify-center gap-6 p-6 md:p-10">
                <h1 class="text-md md:text-xl font-extrabold">Order Summary</h1>
                <p class="text-center text-gray-400">
                    You can now listen to millions of songs, audiobooks, and podcasts on
                    any device anywhere you like!
                </p>
                <div class="flex items-center justify-between bg-gray-200 p-4 w-full rounded-xl">
                    <div class="flex items-center gap-5">
                    <img src="https://source.unsplash.com/random/50x50/?product/2" alt="" class="rounded-full"/>
                    <div class="space-y-1 text-sm">
                        <p class="font-bold">Annual Plan</p>
                        <p class="text-gray-400">$59.99/year</p>
                    </div>
                    </div>
                    <a href="#" class="text-sm font-bold text-dark3 hover:text-dark3 hover:no-underline underline transition-all duration-300">
                        Change
                    </a>
                </div>
                <button data-modal-hide="static-modal-{{ $i }}" type="button" class="bg-primary/80 hover:bg-primary text-dark2 hover:text-dark3 py-3 w-full font-bold rounded-xl shadow-md transition-all duration-300">
                    Proceed to Payment
                </button>
                <button data-modal-hide="static-modal-{{ $i }}" type="button" class="text-gray-500 hover:text-gray-800 font-bold transition-all duration-300">
                    Cancel Order
                </button>
                </div>
            </div>
        </div>
    </div>
</div>
