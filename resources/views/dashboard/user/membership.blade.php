<x-app-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <div>
        @include('dashboard.user.sidebar')
        <div class="">
            <div class="p-4 my-6 w-10/12 float-right">
                <div class="sm:px-6 mx-4"> 
                    <!-- if active membership -->
                    @if(count($memberships) == 1)
                    <div>
                        <div class="bg-white overflow-hidden shadow-md sm:rounded-lg mr-12 pb-6 mb-6">
                            <div class="flex items-center">
                                <div class="p-6 text-gray-900 font-bold text-xl">{{ __("Basic Plan") }}</div>
                                <span class="inline-block px-2 py-1 text-xs font-semibold text-gray-700 bg-primary rounded-full">active until 30 December 2023</span>
                            </div>
                            <div class="px-6">
                                <p> Benefits: </p>
                                <ul class="list-disc list-inside ml-4">
                                    <li>2 team members</li>
                                    <li>20GB Cloud storage</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @else
                    
                    <!-- if no active membership -->
                    <div class="flex items-center mb-6 justify-between">
                        <h2 class="text-xl font-extrabold text-dark3 inline-block px-3 py-1 bg-primary rounded-lg">Choose your plan</h2>
                    </div>

                    <div class="items-center flex justify-between">
                        @foreach($memberships as $membership)
                        <div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 ">
                            <h5 class="mb-4 text-xl font-medium text-gray-500 ">Join Membership for</h5>
                            <div class="flex items-baseline text-gray-900 ">
                                <span class="text-2xl font-semibold">Rp </span>
                                <span class="text-3xl font-extrabold tracking-tight"> {{ number_format(floatval($membership->cost), 0) }}</span>
                                <span class="ms-1 text-xl font-normal text-gray-500 ">/{{ $membership->duration }} months</span>
                            </div>
                            <ul role="list" class="space-y-5 my-7">
                                <li class="flex items-center">
                                    <svg class="flex-shrink-0 w-4 h-4 text-green-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 ms-3">2 team members</span>
                                </li>
                                <li class="flex">
                                    <svg class="flex-shrink-0 w-4 h-4 text-green-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 ms-3">20GB Cloud storage</span>
                                </li>
                                <li class="flex">
                                    <svg class="flex-shrink-0 w-4 h-4 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 ms-3">Integration help</span>
                                </li>
                                <li class="flex line-through decoration-gray-500">
                                    <svg class="flex-shrink-0 w-4 h-4 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 ms-3">Sketch Files</span>
                                </li>
                                <li class="flex line-through decoration-gray-500">
                                    <svg class="flex-shrink-0 w-4 h-4 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 ms-3">API Access</span>
                                </li>
                                <li class="flex line-through decoration-gray-500">
                                    <svg class="flex-shrink-0 w-4 h-4 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 ms-3">Complete documentation</span>
                                </li>
                                <li class="flex line-through decoration-gray-500">
                                    <svg class="flex-shrink-0 w-4 h-4 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 ms-3">24×7 phone & email support</span>
                                </li>
                            </ul>
                            <button data-modal-target="static-modal" data-modal-index="{{ $membership->id }}" data-modal-toggle="static-modal" type="button" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-200 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose plan</button>
                        </div>
                        <!-- Main modal -->
                        <div id="static-modal-{{ $membership->id }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden fixed z-50 justify-center bg-gray-800/60 items-center md:inset-0 max-h-full">
                                <div class="relative p-4 w-full max-h-full mt-16">
                                    <!-- Modal content -->
                                    <div class="flex justify-center">
                                        <div class="bg-white rounded-2xl overflow-hidden shadow-md w-1/3">
                                            <img src="{{ asset('img/banner.png') }}" alt="" class="h-24 w-full"/>
                                            <div class="flex flex-col items-center justify-center gap-6 p-6 md:p-10">
                                            <h1 class="text-md md:text-xl font-extrabold">Order Summary</h1>
                                            <p class="text-center text-gray-400">
                                                You will be charged Rp {{ $membership->cost }} for {{ $membership->duration }} months
                                            </p>
                                            <div class="flex items-center justify-between bg-gray-200 p-4 w-full rounded-xl">
                                                <div class="flex items-center gap-5">
                                                <img src="{{asset('img/logo_fithub.png')}}" alt="" class="rounded-full w-[50px] h-[50px]"/>
                                                <div class="space-y-1 text-sm">
                                                    <p class="font-bold">{{ $membership->duration }} months</p>
                                                    <p class="text-gray-400">Rp {{ $membership->cost }}</p>
                                                </div>
                                                </div>
                                            </div>
                                                <form  method="post" class="flex flex-col gap-4 w-full">
                                                    @csrf
                                                    <div class="flex flex-col gap-2">
                                                        <label for="payment_method" class="text-sm font-bold text-gray-500">Payment Method</label>
                                                        <select name="payment_method" id="payment_method" class="border border-gray-300 rounded-md p-2">
                                                            <option value="credit_card">Credit Card</option>
                                                            <option value="bank_transfer">Bank Transfer</option>
                                                            <option value="paypal">Paypal</option>
                                                        </select>
                                                    </div>
                                                    <div class="flex flex-col gap-2">
                                                        <label for="total_price" class="text-sm font-bold text-gray-500">Total Price</label>
                                                        <input type="text" name="total_price" id="total_price" value="{{ $membership->cost }}" class="border border-gray-300 rounded-md p-2" readonly disabled>
                                                    </div>
                                                    <div class="flex flex-col gap-2">
                                                        <label for="proof_payment" class="text-sm font-bold text-gray-500">Proof Payment</label>
                                                        <input type="file" name="proof_payment" id="proof_payment" class="border border-gray-300 rounded-md p-2">
                                                    </div>
                                                    <input type="hidden" name="product" value="{{ $membership->duration }}">
                                                    <div class="flex flex-col gap-2">
                                                        <button type="submit" class="bg-primary/80 hover:bg-primary text-dark2 hover:text-dark3 py-3 w-full font-bold rounded-xl shadow-md transition-all duration-300">
                                                            Proceed to Payment
                                                        </button>
                                                        <button data-modal-hide="static-modal-{{ $membership->id }}" type="button" class="text-gray-500 hover:text-gray-800 font-bold transition-all duration-300">
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
                    <div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
