<x-app-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <div>
        @include('dashboard.user.sidebar')
        <div class="">
            <div class="p-4 my-6 w-10/12 float-right">
                <div class="sm:px-6 mx-4"> 
                    <div class="px-4">  
                        <!-- active trainers -->
                        <div class="mb-5 flex items-center justify-between">
                            <h2 class="text-lg font-semibold text-gray-900 -ml-2">Active Trainers</h2>
                            </div>
                            @if($activeTrainers->isEmpty())
                                <p class="text-gray-500 h-24">None active trainers</p>
                            @else
                            @foreach($activeTrainers as $activeTrainer)
                            <div class="mb-6 sm:w-1/3 rounded-lg bg-white p-6 shadow-md">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                <img class="mr-2 h-10 w-10 rounded-full object-cover" src="https://source.unsplash.com/random/900x700/?face/{{ $activeTrainer->id }}" alt="profile" />
                                <div>
                                    <h3 class="text-base font-semibold text-gray-900">{{ $activeTrainer->name }}</h3>
                                    <span class="block text-xs font-normal text-gray-500">{{ $activeTrainer->certification }} </span>
                                </div>
                                </div>
                            </div>
                            <div class="mt-6 flex items-center justify-between text-sm font-semibold text-gray-900">
                                <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 h-5 w-5 text-base text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122" />
                                </svg>
                                <span class="mr-1">40</span> Classes 
                                </div>
                                <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-1 h-5 w-6 text-yellow-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                </svg>
                                4,7 (750 Reviews)
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>

                        <!-- explore trainers -->
                        <div class="my-5 flex items-center justify-between">
                            <h2 class="text-lg font-semibold text-gray-900">Explore Personal Trainers</h2>
                        </div>
                            
                        <div class="grid grid-cols-1 3md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($trainers as $trainer)
                            <button data-modal-target="static-modal" data-modal-index="{{ $trainer->id }}" data-modal-toggle="static-modal" class="rounded-lg bg-white p-6 shadow-md">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                    <img class="mr-2 h-10 w-10 rounded-full object-cover" src="https://source.unsplash.com/random/900x700/?face/{{ $trainer->id }}" alt="profile" />
                                    <div>
                                    <h3 class="text-base font-semibold text-gray-900">{{ $trainer->name }}</h3>
                                        <span class="block text-xs font-normal text-gray-500">Gymnastic Speciality  </span>
                                    </div>
                                    </div>
                                    <p class="text-sm font-medium text-indigo-500">Rp {{ $trainer->session_cost }}</p>
                                </div>
                                <p class="my-6 text-sm font-normal text-left text-gray-500">{{ $trainer->certification }} </span>
                                <div class="mt-6 flex items-center justify-between text-sm font-semibold text-gray-900">
                                    <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 h-5 w-5 text-base text-gray-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122" />
                                    </svg>
                                    <span class="mr-1">40</span> Classes 
                                    </div>
                                    <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-1 h-5 w-6 text-yellow-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                    4,7 (750 Reviews)
                                    </div>
                                </div>
                            </button>
                            <!-- Main modal -->
                            <div id="static-modal-{{ $trainer->id }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden fixed z-50 justify-center bg-gray-800/60 items-center md:inset-0 max-h-full">
                                <div class="relative p-4 w-full max-h-full mt-16">
                                    <!-- Modal content -->
                                    <div class="flex justify-center">
                                        <div class="bg-white rounded-2xl overflow-hidden shadow-md w-1/3">
                                            <img src="{{ asset('img/banner.png') }}" alt="" class="h-24 w-full"/>
                                            <div class="flex flex-col items-center justify-center gap-6 p-6 md:p-10">
                                            <h1 class="text-md md:text-xl font-extrabold">Order Summary</h1>
                                            <p class="text-center text-gray-400">
                                                You will be charged Rp {{ $trainer->session_cost }} for 1 session with {{ $trainer->name }}.
                                            </p>
                                            <div class="flex items-center justify-between bg-gray-200 p-4 w-full rounded-xl">
                                                <div class="flex items-center gap-5">
                                                <img src="https://source.unsplash.com/random/900x700/?face/{{ $trainer->id }}" alt="" class="rounded-full w-[50px] h-[50px]"/>
                                                <div class="space-y-1 text-sm">
                                                    <p class="font-bold">{{ $trainer->name }}</p>
                                                    <p class="text-gray-400">Rp {{ $trainer->session_cost }}</p>
                                                </div>
                                                </div>
                                            </div>
                                                <form method="post" action="{{ route('payment.create', ['user_id' => Auth::user()->id]) }}" enctype="multipart/form-data" class="flex flex-col gap-2">
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                    <div class="flex flex-col gap-2">
                                                        <label for="method" class="text-sm font-bold text-gray-500">Payment Method</label>
                                                        <select name="method" id="method" class="border border-gray-300 rounded-md p-2">
                                                            <option value="Credit Card">Credit Card</option>
                                                            <option value="Bank Transfer">Bank Transfer</option>
                                                            <option value="Paypal">Paypal</option>
                                                        </select>
                                                    </div>
                                                    <div class="flex flex-col gap-2">
                                                        <label for="total" class="text-sm font-bold text-gray-500">Total Price</label>
                                                        <input type="text" name="total" id="total" value="{{ $trainer->session_cost }}" class="border border-gray-300 rounded-md p-2" readonly disabled>
                                                    </div>
                                                    <div class="flex flex-col gap-2">
                                                        <label for="date" class="text-sm font-bold text-gray-500">Date</label>
                                                        <input type="date" name="date" id="date" class="border border-gray-300 rounded-md p-2">
                                                    </div>
                                                    <div class="flex flex-col gap-2">
                                                        <label for="payment_photo" class="text-sm font-bold text-gray-500">Proof Payment</label>
                                                        <input type="file" name="payment_photo" id="payment_photo" class="border border-gray-300 rounded-md p-2">
                                                    </div>
                                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                    <input type="hidden" name="total" value="{{ $trainer->session_cost }}">
                                                    <input type="hidden" name="product" value="{{ $trainer->name }}">
                                                    <div class="flex flex-col gap-2">
                                                        <button type="submit" class="bg-primary/80 hover:bg-primary text-dark2 hover:text-dark3 py-3 w-full font-bold rounded-xl shadow-md transition-all duration-300">
                                                            Proceed to Payment
                                                        </button>
                                                        <button data-modal-hide="static-modal-{{ $trainer->id }}" type="button" class="text-gray-500 hover:text-gray-800 font-bold transition-all duration-300">
                                                            Cancel Order
                                                        </button>
                                                    </div>
                                                </form>
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
