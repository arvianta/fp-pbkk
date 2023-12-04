<x-app-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <div>
        @include('dashboard.user.sidebar')
        <div class="p-4 sm:ml-64 my-6">
            <div class="">
                <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 ml-5">
                    <div class="grid gap-4 xl:grid-cols-2 2xl:grid-cols-3">
                        <!-- Graph -->
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg col-span-2">
                            <div class="grid gap-4">
                                <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm  sm:p-6 ">
                                <div class="items-center justify-between pb-4 border-b border-gray-200 sm:flex ">
                                    <div class="w-full mb-4 sm:mb-0">
                                    <h3 class="text-base font-normal text-gray-500 ">BMI Graph</h3>
                                    <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl ">Health Information</span>
                                    <p class="flex items-center text-base font-normal text-gray-500 ">
                                        <span class="flex items-center mr-1.5 text-sm text-green-500 ">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z"></path>
                                        </svg>
                                        2.5% 
                                        </span>
                                        Since last month
                                    </p>
                                    </div>
                                    <div class="w-full max-w-lg">
                                    <div date-rangepicker class="grid items-center grid-cols-2 gap-4">
                                        <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z"></path>
                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"></path>
                                            </svg>
                                        </div>
                                        <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5       " placeholder="From">
                                        </div>
                                        <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z"></path>
                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"></path>
                                            </svg>
                                        </div>
                                        <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5       " placeholder="To">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="w-full" id="sales-by-category"></div>
                                <!-- Card Footer -->
                                <div class="flex items-center justify-between pt-3 mt-4 border-t border-gray-200 sm:pt-6 ">
                                    <div>
                                    <button class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900  " type="button" data-dropdown-toggle="sales-by-category-dropdown">Last 7 days <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                                    <!-- Dropdown menu -->
                                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow  " id="sales-by-category-dropdown">
                                        <div class="px-4 py-3" role="none">
                                            <p class="text-sm font-medium text-gray-900 truncate " role="none">
                                            Sep 16, 2021 - Sep 22, 2021
                                            </p>
                                        </div>
                                        <ul class="py-1" role="none">
                                            <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100   " role="menuitem">Yesterday</a>
                                            </li>
                                            <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100   " role="menuitem">Today</a>
                                            </li>
                                            <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100   " role="menuitem">Last 7 days</a>
                                            </li>
                                            <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100   " role="menuitem">Last 30 days</a>
                                            </li>
                                            <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100   " role="menuitem">Last 90 days</a>
                                            </li>
                                        </ul>
                                        <div class="py-1" role="none">
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100   " role="menuitem">Custom...</a>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="flex-shrink-0">
                                    <a href="#" class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100  ">
                                        Show Report
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                    </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>

                        <!-- Update -->
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900 font-semibold">
                                {{ __("Update Data") }}
                            </div>         
                            <form class="max-w-sm mx-auto">
                            <div class="mb-5">
                                <label for="height" class="block mb-2 text-sm font-medium text-gray-900 ">Height</label>
                                <input type="height" id="height" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5      " placeholder="172" required>
                            </div>
                            <div class="mb-5">
                                <label for="weight" class="block mb-2 text-sm font-medium text-gray-900 ">Weight</label>
                                <input type="weight" id="weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5      " placeholder="65" required>
                            </div>

                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center   ">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
