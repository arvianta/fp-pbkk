<x-app-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <div>
        @include('dashboard.user.sidebar')
        <div class="p-4 sm:ml-64 my-4">
            <div class="px-4">
                <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
                    <!-- if active membership -->
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

                        <div class="pb-6 justify-end flex mr-12 gap-4 ">
                            <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg text-center   ">
                                <svg class="w-3.5 h-3.5 text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                    <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z"/>
                                </svg>
                                Cancel Plan
                            </button>
                            <button type="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center   ">
                                <svg class="w-3.5 h-3.5 text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 10H1m0 0 3-3m-3 3 3 3m1-9h10m0 0-3 3m3-3-3-3"/>
                                </svg>
                                Upgrade Plan
                            </button>
                        </div>
                    </div>

                    <!-- if no active membership -->
                    <div class="flex items-center mb-6 justify-between">
                        <h2 class="text-xl font-extrabold text-dark3 inline-block px-3 py-1 bg-primary rounded-lg">Choose your plan</h2>
                    </div>

                    <div class="items-center flex justify-between">
                        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 ">
                            <h5 class="mb-4 text-xl font-medium text-gray-500 ">Basic plan</h5>
                            <div class="flex items-baseline text-gray-900 ">
                                <span class="text-3xl font-semibold">$</span>
                                <span class="text-5xl font-extrabold tracking-tight">39</span>
                                <span class="ms-1 text-xl font-normal text-gray-500 ">/month</span>
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
                            <button type="button" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-200 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose plan</button>
                        </div>
                        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 ">
                            <h5 class="mb-4 text-xl font-medium text-gray-500 ">Standard plan</h5>
                            <div class="flex items-baseline text-gray-900 ">
                                <span class="text-3xl font-semibold">$</span>
                                <span class="text-5xl font-extrabold tracking-tight">49</span>
                                <span class="ms-1 text-xl font-normal text-gray-500 ">/month</span>
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
                                    <svg class="flex-shrink-0 w-4 h-4 text-green-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 ms-3">Integration help</span>
                                </li>
                                <li class="flex line-through decoration-gray-500">
                                    <svg class="flex-shrink-0 w-4 h-4 text-green-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
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
                            <button type="button" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-200 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose plan</button>
                        </div>
                        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 ">
                            <h5 class="mb-4 text-xl font-medium text-gray-500 ">Premium plan</h5>
                            <div class="flex items-baseline text-gray-900 ">
                                <span class="text-3xl font-semibold">$</span>
                                <span class="text-5xl font-extrabold tracking-tight">59</span>
                                <span class="ms-1 text-xl font-normal text-gray-500 ">/month</span>
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
                                    <svg class="flex-shrink-0 w-4 h-4 text-green-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 ms-3">Integration help</span>
                                </li>
                                <li class="flex line-through decoration-gray-500">
                                    <svg class="flex-shrink-0 w-4 h-4 text-green-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 ms-3">Sketch Files</span>
                                </li>
                                <li class="flex line-through decoration-gray-500">
                                    <svg class="flex-shrink-0 w-4 h-4 text-green-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 ms-3">API Access</span>
                                </li>
                                <li class="flex line-through decoration-gray-500">
                                    <svg class="flex-shrink-0 w-4 h-4 text-green-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 ms-3">Complete documentation</span>
                                </li>
                                <li class="flex line-through decoration-gray-500">
                                    <svg class="flex-shrink-0 w-4 h-4 text-green-600 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 ms-3">24×7 phone & email support</span>
                                </li>
                            </ul>
                            <button type="button" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-200 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose plan</button>
                        </div>
                    <div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
