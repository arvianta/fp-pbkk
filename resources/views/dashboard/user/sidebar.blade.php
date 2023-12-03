<aside id="cta-button-sidebar" class="fixed top-0 left-0 z-0 w-64 pt-10 mt-8 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50">
        <ul class="space-y-3 mt-2 mx-1 font-medium">
            <li>
                <a href="{{ route('user.course') }}" class="flex items-center p-2 {{ request()->routeIs('user.course') ? 'bg-primary text-dark3' : 'hover:bg-gray-200 hover:text-gray-900 group' }} text-gray-700 rounded-lg group">
                <svg class="w-5 h-5 transition duration-75 {{ request()->routeIs('user.course') ? 'text-gray-900' : 'text-gray-500 group-hover:text-gray-800' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                    <path d="M15.045.007 9.31 0a1.965 1.965 0 0 0-1.4.585L.58 7.979a2 2 0 0 0 0 2.805l6.573 6.631a1.956 1.956 0 0 0 1.4.585 1.965 1.965 0 0 0 1.4-.585l7.409-7.477A2 2 0 0 0 18 8.479v-5.5A2.972 2.972 0 0 0 15.045.007Zm-2.452 6.438a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="ml-3">Course</span>
                </a>
            </li>
            <li>
                <a href="{{ route('user.course') }}" class="flex items-center p-2 {{ request()->routeIs('user.course') ? 'bg-primary text-dark3' : 'hover:bg-gray-200 hover:text-gray-900 group' }} text-gray-700 rounded-lg group">
                <svg class="flex-shrink-0 w-5 h-5 transition duration-75 {{ request()->routeIs('user.course') ? 'text-gray-900' : 'text-gray-500 group-hover:text-gray-800' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 17 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 1v14m4.286-14v14M16 1H4.75a3.89 3.89 0 0 0-2.652 1.025A3.386 3.386 0 0 0 1 4.5c0 .928.395 1.819 1.098 2.475A3.89 3.89 0 0 0 4.75 8H8.5"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">BMI Calculator</span>
                <!-- <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full ">Pro</span> -->
                </a>
            </li>
            <li>
                <a href="{{ route('user.transaction') }}" class="flex items-center p-2 {{ request()->routeIs('user.transaction') ? 'bg-primary text-dark3' : 'hover:bg-gray-200 hover:text-gray-900 group' }} text-gray-700 rounded-lg group">
                <svg class="flex-shrink-0 w-5 h-5 transition duration-75 {{ request()->routeIs('user.transaction') ? 'text-gray-900' : 'text-gray-500 group-hover:text-gray-800' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM2 12V6h16v6H2Z"/>
                    <path d="M6 8H4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2Zm8 0H9a1 1 0 0 0 0 2h5a1 1 0 1 0 0-2Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">History</span>
                <!-- <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full ">Pro</span> -->
                </a>
            </li>
            <li>
                <a href="{{ route('user.chat') }}" class="flex items-center p-2 {{ request()->routeIs('user.chat') ? 'bg-primary text-dark3' : 'hover:bg-gray-200 hover:text-gray-900 group' }} text-gray-700 rounded-lg group">
                <svg class="flex-shrink-0 w-5 h-5 transition duration-75 {{ request()->routeIs('admin.chat') ? 'text-gray-900' : 'text-gray-500 group-hover:text-gray-800' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h3.546l3.2 3.659a1 1 0 0 0 1.506 0L13.454 14H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-8 10H5a1 1 0 0 1 0-2h5a1 1 0 1 1 0 2Zm5-4H5a1 1 0 0 1 0-2h10a1 1 0 1 1 0 2Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Chat</span>
                <!-- <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full ">Pro</span> -->
                </a>
            </li>
        </ul>
    </div>
</aside>