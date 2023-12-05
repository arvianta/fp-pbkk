<button type="button" data-dropdown-offset-skidding="-48" data-dropdown-toggle="notification-dropdown" class="sm:mx-4 p-2 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100   ">
    <span class="sr-only">View notifications</span>
    <!-- Bell icon -->
    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
</button>

<!-- Dropdown menu -->
<div class="z-40 hidden max-w-sm my-4 overflow-hidden text-base list-none bg-white divide-y divide-gray-100 rounded shadow-lg  " id="notification-dropdown">
    <div class="block px-4 py-2 text-base font-medium text-center text-gray-700 bg-gray-50 w-80">
        Notifications
    </div>
    <div>
      @foreach($notifications as $notification)
        <a href="#" class="flex px-4 py-3 border-b hover:bg-gray-100">
            <div class="w-full pl-3">
                <div class="text-gray-500 font-normal text-sm mb-1.5 ">{{ $notification->message }}</div>
                <div class="text-xs font-medium text-primary-700 ">{{ $notification->created_at->diffForHumans() }}</div>
            </div>
        </a>
      @endforeach
    </div>
</div>