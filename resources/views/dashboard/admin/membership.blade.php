<x-app-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <div>
        @include('dashboard.admin.sidebar')
        <div class="">
            <div class="p-4 my-6 w-10/12 float-right">
                <div class="sm:px-6 mx-4"> 
                    
                    <!-- if no active membership -->
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
                            <button type="button" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-200 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Edit plan</button>
                        </div>
                        @endforeach
                    <div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
