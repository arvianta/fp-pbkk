<aside id="cta-button-sidebar" class="fixed top-0 left-0 z-0 w-2/12 pt-10 mt-8 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 border-r border-gray-300">
        <ul class="space-y-3 mt-2 mx-1 font-medium">
            <li>
                <a href="{{ route('dashboard.user') }}" class="flex items-center p-2 {{ request()->routeIs('dashboard.user') ? 'bg-primary text-dark3' : 'hover:bg-gray-200 hover:text-gray-900 group' }} text-gray-700 rounded-lg group">
                <svg class="w-5 h-5 transition duration-75 {{ request()->routeIs('dashboard.user') ? 'text-gray-900' : 'text-gray-500 group-hover:text-gray-800' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                </svg>
                <span class="ml-3">Home</span>
                </a>
            </li>
            <li>
                <a href="{{ route('user.membership') }}" class="flex items-center p-2 {{ request()->routeIs('user.membership') ? 'bg-primary text-dark3' : 'hover:bg-gray-200 hover:text-gray-900 group' }} text-gray-700 rounded-lg group">
                <svg class="w-5 h-5 transition duration-75 {{ request()->routeIs('user.membership') ? 'text-gray-900' : 'text-gray-500 group-hover:text-gray-800' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                    <path d="M15.045.007 9.31 0a1.965 1.965 0 0 0-1.4.585L.58 7.979a2 2 0 0 0 0 2.805l6.573 6.631a1.956 1.956 0 0 0 1.4.585 1.965 1.965 0 0 0 1.4-.585l7.409-7.477A2 2 0 0 0 18 8.479v-5.5A2.972 2.972 0 0 0 15.045.007Zm-2.452 6.438a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="ml-3">Membership</span>
                </a>
            </li>
            <li>
                <a href="{{ route('user.class') }}" class="flex items-center p-2 {{ request()->routeIs('user.class') ? 'bg-primary text-dark3' : 'hover:bg-gray-200 hover:text-gray-900 group' }} text-gray-700 rounded-lg group">
                <svg class="w-5 h-5 transition duration-75 {{ request()->routeIs('user.class') ? 'text-gray-900' : 'text-gray-500 group-hover:text-gray-800' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                    <path d="m19.822 7.431-4.846-7A1 1 0 0 0 14.153 0H1a1 1 0 0 0-.822 1.569L4.63 8 .178 14.431A1 1 0 0 0 1 16h13.153a1.001 1.001 0 0 0 .823-.431l4.846-7a1 1 0 0 0 0-1.138Z"/>
                </svg>
                <span class="ml-3">Gym Classes</span>  
                </a>
            </li>
            <li>
                <a href="{{ route('user.trainer') }}" class="flex items-center p-2 {{ request()->routeIs('user.trainer') ? 'bg-primary text-dark3' : 'hover:bg-gray-200 hover:text-gray-900 group' }} text-gray-700 rounded-lg group">
                <svg class="w-5 h-5 transition duration-75 {{ request()->routeIs('user.trainer') ? 'text-gray-900' : 'text-gray-500 group-hover:text-gray-800' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M7.824 5.937a1 1 0 0 0 .726-.312 2.042 2.042 0 0 1 2.835-.065 1 1 0 0 0 1.388-1.441 3.994 3.994 0 0 0-5.674.13 1 1 0 0 0 .725 1.688Z"/>
                    <path d="M17 7A7 7 0 1 0 3 7a3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h1a1 1 0 0 0 1-1V7a5 5 0 1 1 10 0v7.083A2.92 2.92 0 0 1 12.083 17H12a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1a1.993 1.993 0 0 0 1.722-1h.361a4.92 4.92 0 0 0 4.824-4H17a3 3 0 0 0 3-3v-2a3 3 0 0 0-3-3Z"/>
                </svg>
                <span class="ml-3">Personal Trainer</span>
                </a>
            </li>
            <li>
                <a href="{{ route('bmi.get', ['user_id' => Auth::user()->id]) }}" class="flex items-center p-2 {{ request()->routeIs('bmi.get') ? 'bg-primary text-dark3' : 'hover:bg-gray-200 hover:text-gray-900 group' }} text-gray-700 rounded-lg group">
                <svg class="flex-shrink-0 w-5 h-5 transition duration-75 {{ request()->routeIs('bmi.get') ? 'text-gray-900' : 'text-gray-500 group-hover:text-gray-800' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 17 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 1v14m4.286-14v14M16 1H4.75a3.89 3.89 0 0 0-2.652 1.025A3.386 3.386 0 0 0 1 4.5c0 .928.395 1.819 1.098 2.475A3.89 3.89 0 0 0 4.75 8H8.5"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">BMI Calculator</span>
                <!-- <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full ">Pro</span> -->
                </a>
            </li>
            <li>
                <a href="{{ route('payment.userlist', ['id' => Auth::user()->id]) }}" class="flex items-center p-2 {{ request()->routeIs('payment.userlist') ? 'bg-primary text-dark3' : 'hover:bg-gray-200 hover:text-gray-900 group' }} text-gray-700 rounded-lg group">
                <svg class="flex-shrink-0 w-5 h-5 transition duration-75 {{ request()->routeIs('payment.userlist') ? 'text-gray-900' : 'text-gray-500 group-hover:text-gray-800' }}"" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM2 12V6h16v6H2Z"/>
                    <path d="M6 8H4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2Zm8 0H9a1 1 0 0 0 0 2h5a1 1 0 1 0 0-2Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">History Subscription</span>
                <!-- <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full ">Pro</span> -->
                </a>
            </li>
        </ul>
    </div>
</aside>