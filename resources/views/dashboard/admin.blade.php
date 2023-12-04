<x-app-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <div>
        @include('dashboard.admin.sidebar')
        <div class="">
            <div class="p-4 my-6 w-10/12 float-right">
                <div class="">
                    <div class="sm:px-6 mx-4"> 
                        <div class="grid gap-4 xl:grid-cols-2 2xl:grid-cols-3">
                            <!-- Main widget -->
                            <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 sm:p-6 ">
                                <div class="flex items-center justify-between mb-4">
                                <div class="flex-shrink-0">
                                    <span class="text-xl font-bold leading-none text-gray-900 sm:text-2xl ">$45,385</span>
                                    <h3 class="text-base font-light text-gray-500 ">Sales this week</h3>
                                </div>
                                <div class="flex items-center justify-end flex-1 text-base font-medium text-green-500 ">
                                    12.5%
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                </div>
                                <div id="main-chart"></div>
                                <!-- Card Footer -->
                                <div class="flex items-center justify-between pt-3 mt-4 border-t border-gray-200 sm:pt-6 ">
                                <div>
                                    <button class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900  " type="button" data-dropdown-toggle="weekly-sales-dropdown">Last 7 days <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                                    <!-- Dropdown menu -->
                                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow  " id="weekly-sales-dropdown">
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
                                    Sales Report
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                    </a>
                                </div>
                                </div>
                            </div>
                            <!--Tabs widget -->
                            <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm  sm:p-6">
                                <h3 class="flex items-center mb-4 text-lg font-semibold text-gray-900 ">Statistics this month
                                <button data-popover-target="popover-description" data-popover-placement="bottom-end" type="button"><svg class="w-4 h-4 ml-2 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg><span class="sr-only">Show information</span></button>
                                </h3>
                                <div data-popover id="popover-description" role="tooltip" class="absolute z-10 invisible inline-block text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72   ">
                                <div class="p-3 space-y-2">
                                    <h3 class="font-semibold text-gray-900 ">Statistics</h3>
                                    <p>Statistics is a branch of applied mathematics that involves the collection, description, analysis, and inference of conclusions from quantitative data.</p>
                                    <a href="#" class="flex items-center font-medium text-primary-600   hover:text-primary-700">Read more <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></a>
                                </div>
                                <div data-popper-arrow></div>
                                </div>
                                <div class="sm:hidden">
                                    <label for="tabs" class="sr-only">Select tab</label>
                                    <select id="tabs" class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5      ">
                                        <option>Statistics</option>
                                        <option>Services</option>
                                        <option>FAQ</option>
                                    </select>
                                </div>
                                <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex  " id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                                    <li class="w-full">
                                        <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="true" class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none  ">Top Classes</button>
                                    </li>
                                    <li class="w-full">
                                        <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false" class="inline-block w-full p-4 rounded-tr-lg bg-gray-50 hover:bg-gray-100 focus:outline-none  ">Top Trainers</button>
                                    </li>
                                </ul>
                                <div id="fullWidthTabContent" class="border-t border-gray-200 ">
                                    <div class="hidden pt-4" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                                    <ul role="list" class="divide-y divide-gray-200 ">
                                        <li class="py-3 sm:py-4">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center min-w-0">
                                            <img class="flex-shrink-0 w-10 h-10" src="/images/products/iphone.png" alt="imac image">
                                            <div class="ml-3">
                                                <p class="font-medium text-gray-900 truncate ">
                                                iPhone 14 Pro 
                                                </p>
                                                <div class="flex items-center justify-end flex-1 text-sm text-green-500 ">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z"></path>
                                                </svg>
                                                2.5% 
                                                <span class="ml-2 text-gray-500">vs last month</span>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="inline-flex items-center text-base font-semibold text-gray-900 ">
                                            $445,467
                                            </div>
                                        </div>
                                        </li>
                                        <li class="py-3 sm:py-4">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center min-w-0">
                                            <img class="flex-shrink-0 w-10 h-10" src="/images/products/imac.png" alt="imac image">
                                            <div class="ml-3">
                                                <p class="font-medium text-gray-900 truncate ">
                                                Apple iMac 27"
                                                </p>
                                                <div class="flex items-center justify-end flex-1 text-sm text-green-500 ">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z"></path>
                                                </svg>
                                                12.5% 
                                                <span class="ml-2 text-gray-500">vs last month</span>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="inline-flex items-center text-base font-semibold text-gray-900 ">
                                            $256,982
                                            </div>
                                        </div>
                                        </li>
                                        <li class="py-3 sm:py-4">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center min-w-0">
                                            <img class="flex-shrink-0 w-10 h-10" src="/images/products/watch.png" alt="watch image">
                                            <div class="ml-3">
                                                <p class="font-medium text-gray-900 truncate ">
                                                Apple Watch SE
                                                </p>
                                                <div class="flex items-center justify-end flex-1 text-sm text-red-600 ">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z"></path>
                                                </svg>
                                                1.35% 
                                                <span class="ml-2 text-gray-500">vs last month</span>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="inline-flex items-center text-base font-semibold text-gray-900 ">
                                            $201,869
                                            </div>
                                        </div>
                                        </li>
                                        <li class="py-3 sm:py-4">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center min-w-0">
                                            <img class="flex-shrink-0 w-10 h-10" src="/images/products/ipad.png" alt="ipad image">
                                            <div class="ml-3">
                                                <p class="font-medium text-gray-900 truncate ">
                                                Apple iPad Air
                                                </p>
                                                <div class="flex items-center justify-end flex-1 text-sm text-green-500 ">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z"></path>
                                                </svg>
                                                12.5% 
                                                <span class="ml-2 text-gray-500">vs last month</span>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="inline-flex items-center text-base font-semibold text-gray-900 ">
                                            $103,967
                                            </div>
                                        </div>
                                        </li>
                                        <li class="py-3 sm:py-4">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center min-w-0">
                                            <img class="flex-shrink-0 w-10 h-10" src="/images/products/imac.png" alt="imac image">
                                            <div class="ml-3">
                                                <p class="font-medium text-gray-900 truncate ">
                                                Apple iMac 24"
                                                </p>
                                                <div class="flex items-center justify-end flex-1 text-sm text-red-600 ">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z"></path>
                                                </svg>
                                                2% 
                                                <span class="ml-2 text-gray-500">vs last month</span>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="inline-flex items-center text-base font-semibold text-gray-900 ">
                                            $98,543
                                            </div>
                                        </div>
                                        </li>               
                                    </ul>
                                    </div>
                                    <div class="hidden pt-4" id="about" role="tabpanel" aria-labelledby="about-tab">
                                    <ul role="list" class="divide-y divide-gray-200 ">
                                        <li class="py-3 sm:py-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full" src="/images/users/neil-sims.png" alt="Neil image">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                            <p class="font-medium text-gray-900 truncate ">
                                                Neil Sims
                                            </p>
                                            <p class="text-sm text-gray-500 truncate ">
                                                email@flowbite.com
                                            </p>
                                            </div>
                                            <div class="inline-flex items-center text-base font-semibold text-gray-900 ">
                                            $3320
                                            </div>
                                        </div>
                                        </li>
                                        <li class="py-3 sm:py-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full" src="/images/users/bonnie-green.png" alt="Neil image">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                            <p class="font-medium text-gray-900 truncate ">
                                                Bonnie Green
                                            </p>
                                            <p class="text-sm text-gray-500 truncate ">
                                                email@flowbite.com
                                            </p>
                                            </div>
                                            <div class="inline-flex items-center text-base font-semibold text-gray-900 ">
                                            $2467
                                            </div>
                                        </div>
                                        </li>
                                        <li class="py-3 sm:py-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full" src="/images/users/michael-gough.png" alt="Neil image">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                            <p class="font-medium text-gray-900 truncate ">
                                                Michael Gough
                                            </p>
                                            <p class="text-sm text-gray-500 truncate ">
                                                email@flowbite.com
                                            </p>
                                            </div>
                                            <div class="inline-flex items-center text-base font-semibold text-gray-900 ">
                                            $2235
                                            </div>
                                        </div>
                                        </li>
                                        <li class="py-3 sm:py-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full" src="/images/users/thomas-lean.png" alt="Neil image">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                            <p class="font-medium text-gray-900 truncate ">
                                                Thomes Lean
                                            </p>
                                            <p class="text-sm text-gray-500 truncate ">
                                                email@flowbite.com
                                            </p>
                                            </div>
                                            <div class="inline-flex items-center text-base font-semibold text-gray-900 ">
                                            $1842
                                            </div>
                                        </div>
                                        </li>
                                        <li class="py-3 sm:py-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full" src="/images/users/lana-byrd.png" alt="Neil image">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                            <p class="font-medium text-gray-900 truncate ">
                                                Lana Byrd
                                            </p>
                                            <p class="text-sm text-gray-500 truncate ">
                                                email@flowbite.com
                                            </p>
                                            </div>
                                            <div class="inline-flex items-center text-base font-semibold text-gray-900 ">
                                            $1044
                                            </div>
                                        </div>
                                        </li>
                                    </ul>
                                    </div>
                                </div>
                                <!-- Card Footer -->
                                <div class="flex items-center justify-between pt-3 mt-5 border-t border-gray-200 sm:pt-6 ">
                                <div>
                                    <button class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900  " type="button" data-dropdown-toggle="stats-dropdown">Last 7 days <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                                    <!-- Dropdown menu -->
                                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow  " id="stats-dropdown">
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
                                    Full Report
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                    </a>
                                </div>
                                </div>
                            </div>
                        </div>
                            <!-- Top Products -->
                            <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-2 2xl:grid-cols-3 pb-6">
                                <div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex  sm:p-6 ">
                                    <div class="w-full">
                                    <h3 class="text-base font-normal text-gray-500 ">New products</h3>
                                    <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl ">2,340</span>
                                    <p class="flex items-center text-sm font-normal text-gray-500 ">
                                        <span class="flex items-center mr-1.5 text-sm text-green-500 ">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z"></path>
                                        </svg>
                                        12.5% 
                                        </span>
                                        This Week
                                    </p>
                                    </div>
                                    <div class="w-full" id="new-products-chart"></div>
                                </div>
                                <div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex  sm:p-6 ">
                                    <div class="w-full">
                                    <h3 class="text-base font-normal text-gray-500 ">Users</h3>
                                    <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl ">2,340</span>
                                    <p class="flex items-center text-sm font-normal text-gray-500 ">
                                        <span class="flex items-center mr-1.5 text-sm text-green-500 ">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z"></path>
                                        </svg>
                                        3,4% 
                                        </span>
                                        This Week
                                    </p>
                                    </div>
                                    <div class="w-full" id="week-signups-chart"></div>
                                </div>
                                <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm  sm:p-6 ">
                                    <div class="w-full">
                                    <h3 class="mb-2 text-base font-normal text-gray-500 ">Users by age</h3>
                                    <div class="flex items-center mb-2">
                                        <div class="w-16 text-sm font-medium ">50+</div>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5 ">
                                        <div class="bg-primary-600 h-2.5 rounded-full " style="width: 18%"></div>
                                        </div>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <div class="w-16 text-sm font-medium ">40+</div>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5 ">
                                        <div class="bg-primary-600 h-2.5 rounded-full " style="width: 15%"></div>
                                        </div>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <div class="w-16 text-sm font-medium ">30+</div>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5 ">
                                        <div class="bg-primary-600 h-2.5 rounded-full " style="width: 60%"></div>
                                        </div>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <div class="w-16 text-sm font-medium ">20+</div>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5 ">
                                        <div class="bg-primary-600 h-2.5 rounded-full " style="width: 30%"></div>
                                        </div>
                                    </div>
                                    </div>
                                    <div id="traffic-channels-chart" class="w-full"></div>
                                </div>
                            </div>    
                            <!-- Download Report -->
                            <div class="w-full bg-white py-4 mr-6 shadow-md rounded-md flex justify-between items-center">
                                <h2 class="text-gray-700 text-xl font-semibold px-6 py-2">Download Report</h2>
                                <button class="w-30 flex items-center justify-center px-6 py-2 mr-6 text-md font-medium text-white bg-green-600 hover:bg-green-700 rounded-md">
                                    <svg class="w-5 h-5 mr-3 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"/>
                                        <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                                    </svg>
                                    Download
                                </button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>