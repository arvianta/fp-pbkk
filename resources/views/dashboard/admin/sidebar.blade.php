<aside id="cta-button-sidebar" class="fixed top-0 left-0 z-0 w-2/12 pt-10 mt-8 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 border-r border-gray-300">
        <ul class="space-y-3 mt-2 mx-1 font-medium">
            <li>
                <a href="{{ route('dashboard.admin') }}" class="flex items-center p-2 {{ request()->routeIs('dashboard.admin') ? 'bg-primary text-dark3' : 'hover:bg-gray-200 hover:text-gray-900 group' }} text-gray-700 rounded-lg group">
                <svg class="w-5 h-5 transition duration-75 {{ request()->routeIs('dashboard.admin') ? 'text-gray-900' : 'text-gray-500 group-hover:text-gray-800' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 20">
                    <path d="M18.972.863a.913.913 0 0 0-.041-.207.956.956 0 0 0-.107-.19 1.01 1.01 0 0 0-.065-.116c-.008-.01-.02-.013-.028-.022a1.008 1.008 0 0 0-.174-.137 1.085 1.085 0 0 0-.141-.095 1.051 1.051 0 0 0-.171-.047.985.985 0 0 0-.207-.041C18.025.007 18.014 0 18 0h-3.207a1 1 0 1 0 0 2h.5l-4.552 3.9-3.5-.874a1 1 0 0 0-.867.189l-5 4a1 1 0 0 0 1.25 1.562L7.238 7.09l3.52.88a1 1 0 0 0 .892-.211L17 3.173v1.034a1 1 0 0 0 2 0V1a.9.9 0 0 0-.028-.137ZM13.5 9a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11Zm.24 4.591a3.112 3.112 0 0 1 1.935 1.374 2.036 2.036 0 0 1 .234 1.584 2.255 2.255 0 0 1-1.374 1.469.982.982 0 0 1-1.953.09 2.943 2.943 0 0 1-1.475-.92 1 1 0 0 1 1.536-1.283.953.953 0 0 0 .507.29.778.778 0 0 0 .831-.18 1.108 1.108 0 0 0-.714-.481 3.105 3.105 0 0 1-1.934-1.374 2.042 2.042 0 0 1-.233-1.584 2.264 2.264 0 0 1 1.45-1.493v-.03a1 1 0 0 1 2 0c.517.159.98.457 1.337.862a1.002 1.002 0 1 1-1.524 1.3.962.962 0 0 0-.507-.286.775.775 0 0 0-.829.18 1.113 1.113 0 0 0 .713.482ZM6 20a1 1 0 0 1-1-1v-6a1 1 0 1 1 2 0v6a1 1 0 0 1-1 1Zm-4 0a1 1 0 0 1-1-1v-4a1 1 0 1 1 2 0v4a1 1 0 0 1-1 1Z"/>
                </svg>
                <span class="ml-3">Analysis</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.userlist') }}" class="flex items-center p-2 {{ request()->routeIs('admin.userlist') ? 'bg-primary text-dark3' : 'hover:bg-gray-200 hover:text-gray-900 group' }} text-gray-700 rounded-lg group">
                <svg class="w-5 h-5 transition duration-75 {{ request()->routeIs('admin.userlist') ? 'text-gray-900' : 'text-gray-500 group-hover:text-gray-800' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 20">
                    <path d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z"/>
                    <path d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z"/>
                    <path d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z"/>
                </svg>
                <span class="ml-3">User List</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.membership') }}" class="flex items-center p-2 {{ request()->routeIs('admin.membership') ? 'bg-primary text-dark3' : 'hover:bg-gray-200 hover:text-gray-900 group' }} text-gray-700 rounded-lg group">
                <svg class="flex-shrink-0 w-5 h-5 transition duration-75 {{ request()->routeIs('admin.membership') ? 'text-gray-900' : 'text-gray-500 group-hover:text-gray-800' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                    <path d="M15.045.007 9.31 0a1.965 1.965 0 0 0-1.4.585L.58 7.979a2 2 0 0 0 0 2.805l6.573 6.631a1.956 1.956 0 0 0 1.4.585 1.965 1.965 0 0 0 1.4-.585l7.409-7.477A2 2 0 0 0 18 8.479v-5.5A2.972 2.972 0 0 0 15.045.007Zm-2.452 6.438a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Membership Plan</span>
                <!-- <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full ">Pro</span> -->
                </a>
            </li>
            <li>
                <a href="{{ route('admin.classes') }}" class="flex items-center p-2 {{ request()->routeIs('admin.classes') ? 'bg-primary text-dark3' : 'hover:bg-gray-200 hover:text-gray-900 group' }} text-gray-700 rounded-lg group">
                <svg class="w-5 h-5 transition duration-75 {{ request()->routeIs('admin.classes') ? 'text-gray-900' : 'text-gray-500 group-hover:text-gray-800' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                    <path d="m19.822 7.431-4.846-7A1 1 0 0 0 14.153 0H1a1 1 0 0 0-.822 1.569L4.63 8 .178 14.431A1 1 0 0 0 1 16h13.153a1.001 1.001 0 0 0 .823-.431l4.846-7a1 1 0 0 0 0-1.138Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Classes List</span>
                <!-- <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full ">Pro</span> -->
                </a>
            </li>
            <li>
                <a href="{{ route('personaltrainer.list') }}" class="flex items-center p-2 {{ request()->routeIs('personaltrainer.list') ? 'bg-primary text-dark3' : 'hover:bg-gray-200 hover:text-gray-900 group' }} text-gray-700 rounded-lg group">
                <svg class="w-5 h-5 transition duration-75 {{ request()->routeIs('personaltrainer.list') ? 'text-gray-900' : 'text-gray-500 group-hover:text-gray-800' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M7.824 5.937a1 1 0 0 0 .726-.312 2.042 2.042 0 0 1 2.835-.065 1 1 0 0 0 1.388-1.441 3.994 3.994 0 0 0-5.674.13 1 1 0 0 0 .725 1.688Z"/>
                    <path d="M17 7A7 7 0 1 0 3 7a3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h1a1 1 0 0 0 1-1V7a5 5 0 1 1 10 0v7.083A2.92 2.92 0 0 1 12.083 17H12a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1a1.993 1.993 0 0 0 1.722-1h.361a4.92 4.92 0 0 0 4.824-4H17a3 3 0 0 0 3-3v-2a3 3 0 0 0-3-3Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Trainer List</span>
                <!-- <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full ">Pro</span> -->
                </a>
            </li>
            <li>
                <a href="{{ route('admin.instructors') }}" class="flex items-center p-2 {{ request()->routeIs('admin.instructors') ? 'bg-primary text-dark3' : 'hover:bg-gray-200 hover:text-gray-900 group' }} text-gray-700 rounded-lg group">
                <svg class="flex-shrink-0 w-5 h-5 transition duration-75 {{ request()->routeIs('admin.instructors') ? 'text-gray-900' : 'text-gray-500 group-hover:text-gray-800' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                    <path d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
                    <path d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Instructor List</span>
                <!-- <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full ">Pro</span> -->
                </a>
            </li>
            <!-- <li>
                <a href="{{ route('admin.transaction') }}" class="flex items-center p-2 {{ request()->routeIs('admin.transaction') ? 'bg-primary text-dark3' : 'hover:bg-gray-200 hover:text-gray-900 group' }} text-gray-700 rounded-lg group">
                <svg class="flex-shrink-0 w-5 h-5 transition duration-75 {{ request()->routeIs('admin.transaction') ? 'text-gray-900' : 'text-gray-500 group-hover:text-gray-800' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM2 12V6h16v6H2Z"/>
                    <path d="M6 8H4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2Zm8 0H9a1 1 0 0 0 0 2h5a1 1 0 1 0 0-2Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Transaction History</span>
                </a>
            </li> -->
            <li>
                <a href="{{ route('payment.list') }}" class="flex items-center p-2 {{ request()->routeIs('payment.list') ? 'bg-primary text-dark3' : 'hover:bg-gray-200 hover:text-gray-900 group' }} text-gray-700 rounded-lg group">
                <svg class="flex-shrink-0 w-5 h-5 transition duration-75 {{ request()->routeIs('payment.list') ? 'text-gray-900' : 'text-gray-500 group-hover:text-gray-800' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM2 12V6h16v6H2Z"/>
                    <path d="M6 8H4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2Zm8 0H9a1 1 0 0 0 0 2h5a1 1 0 1 0 0-2Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Payment List</span>
                <!-- <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full ">Pro</span> -->
                </a>
            </li>
            <li>
                <a href="{{ route('admin.broadcast') }}" class="flex items-center p-2 {{ request()->routeIs('admin.broadcast') ? 'bg-primary text-dark3' : 'hover:bg-gray-200 hover:text-gray-900 group' }} text-gray-700 rounded-lg group">
                <svg class="flex-shrink-0 w-5 h-5 transition duration-75 {{ request()->routeIs('admin.broadcast') ? 'text-gray-900' : 'text-gray-500 group-hover:text-gray-800' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h3.546l3.2 3.659a1 1 0 0 0 1.506 0L13.454 14H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-8 10H5a1 1 0 0 1 0-2h5a1 1 0 1 1 0 2Zm5-4H5a1 1 0 0 1 0-2h10a1 1 0 1 1 0 2Z"/>
                </svg>

                <span class="flex-1 ml-3 whitespace-nowrap">Broadcast Notifications</span>
                <!-- <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full ">Pro</span> -->
                </a>
            </li>
        </ul>
    </div>
</aside>